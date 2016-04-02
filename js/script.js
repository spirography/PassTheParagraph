console.log("JAVASCRIPT LOADED");
var contributions;
var story_id = 25;
var sentence_id = 0;

/*
 * Renders all sentence fragments currently held
 */
function render_fragments() {
    if (contributions === undefined || contributions === null) {
        console.log("Tried to render story fragments, but there was nothing to render");
        return;
    }

    contributions.forEach(function(entry) {
        console.log(entry);
        document.getElementById("sentences").innerHTML +=
            '<div class="story-preview">' +
                '<p>' + entry.content + '</p>' +
                '<span></span><span>' + entry.date_created +'</span>' +
            '</div>';
    });

    sentence_id = contributions[contributions.length-1].id;
}

/*
 * Submits the given story to the server,
 * and makes a call to get any updates
 */
function submit_sentence() {

    // get data from post
    var text = document.getElementById('sentence-form').value;

    // TODO: check on client side sentence is valid (eg. not too long)

    // post to server via ajax
    var request = new XMLHttpRequest();

    request.onreadystatechange = function () {
        var DONE = this.DONE || 4;
        if (this.readyState === DONE && this.status == 200){
            console.log(this.responseText);
            // check server for story updates
            get_updates(story_id, sentence_id);
        }
    };

    request.open('POST', 'submit_sentence.php', true);
    request.setRequestHeader('Content-Type', 'application/json; charset=UTF-8');
    var data = {content: text.replace(/\n/g, ''), story: story_id}
    request.send(JSON.stringify(data)); // TODO: use correct story id
    console.log("Data: ", data);
}

/*
 * Check if the given story has had any updates
 */
function get_updates(story_id, last_sentence_id) {

    if (story_id == null) {
        console.log("Couldn't get updates; story_id is null");
        return;
    } else if (sentence_id == null) {
        console.log("Couldn't get updates; sentence_id is null");
        return;
    }

    // make request
    // post to server via ajax
    var request = new XMLHttpRequest();

    request.onreadystatechange = function () {
        var DONE = this.DONE || 4;
        if (this.readyState === DONE && this.status == 200){
            // TODO: DO RESPONSE STUFF HERE
            var response = JSON.parse(this.responseText);
            console.log(response);
            console.log(response[response.length-1].id);
            sentence_id = response[response.length-1].id;

            // add new sentences to window
            contributions = response;
            render_fragments();
        }
    };

    request.open('POST', 'check_sentence_update.php', true);
    request.setRequestHeader('Content-Type', 'application/json; charset=UTF-8');
    var data = {sentence: last_sentence_id, story: story_id};
    request.send(JSON.stringify(data)); // TODO: use correct story id

}
