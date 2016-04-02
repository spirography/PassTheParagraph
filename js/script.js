console.log("JAVASCRIPT LOADED");
var contributions;

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
        document.getElementById("content").innerHTML +=
            '<div class="story-preview">' +
                '<p>' + entry.content + '</p>' +
                '<span></span><span>' + entry.date_created +'</span>' +
            '</div>';
    });
}

/*
 * Submits the given story to the server,
 * and makes a call to get any updates
 */
function submit_sentence() {

    // get data from post
    var data = document.getElementById('sentence-form').value();

    // TODO: check on client side sentence is valid (eg. not too long)

    // post to server via ajax
    var request = new XMLHttpRequest();
    request.open('POST', '/submit_sentence.php', true);
    request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
    request.send(data);
}
