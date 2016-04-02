console.log("JAVASCRIPT LOADED");
var contributions;
var story_id;
var sentence_id = 0;
var old_sentence_id = 0;

var noActivity; // how active the user has been - determintes how frequently the server is pinged for updates

/*
 * Checks if others have submitted stories recently
 */
function check_for_updates(callback) {
    var nextRequest = 2000; // milliseconds until next update check

    if (sentence_id == old_sentence_id) {
        noActivity++;
    } else {
        noActivity = 0; // reset activity is the story was updated
        old_sentence_id = sentence_id;
    }
    if (noActivity > 15) {
        nextRequest = 30000;
    } else if (noActivity > 10) {
        nextRequest = 20000;
    } else if (noActivity > 6) {
        nextRequest = 10000;
    } else if (noActivity > 4) {
        nextRequest = 5000;
    }

    get_updates(story_id, sentence_id);
    setTimeout(callback,nextRequest);

}

function start_checking_a_story_for_updates() {
    // self executing timeout functions
    (function getUpdatesTimeoutFunction(){
        check_for_updates(getUpdatesTimeoutFunction);
    })();
}

/*
 * Renders all sentence fragments currently held
 */
function render_fragments(scrollToBottom) {
    if (contributions === undefined || contributions === null) {
        console.log("Tried to render story fragments, but there was nothing to render");
        return;
    }

    var sentencesDiv = document.getElementById("sentences");

    // check if currently scrolled to the bottom
    // (if true, then rescroll as new sentence divs are added)
    if (scrollToBottom === undefined) {
        if (sentencesDiv.scrollTop >= sentencesDiv.scrollHeight - sentencesDiv.offsetHeight) {
            scrollToBottom = true;
        } else {
            scrollToBottom = false;
        }
    }

    contributions.forEach(function(entry) {
        console.log(entry);
        sentencesDiv.innerHTML +=
            '<div class="fragment">' +
                '<p>' + entry.content + '</p>' +
                '<span></span><span>' + entry.date_created +'</span>' +
            '</div>';
    });

    sentence_id = contributions[contributions.length-1].id;

    // scroll down to most recent updates
    // only scroll if page was already scrolled to the bottom

    if (scrollToBottom) {
        var scrollInterval = setInterval(function() {
            sentencesDiv.scrollTop += Math.pow((sentencesDiv.scrollHeight - sentencesDiv.scrollTop), 2)/50000;
            if (sentencesDiv.scrollTop >= sentencesDiv.scrollHeight - sentencesDiv.offsetHeight) {
                clearInterval(scrollInterval);
            }
        }, 10);
    }
}

/*
 * Displays the number of characters typed out of the allotted amount
 */
function display_char_limit() {
    console.log("hi");
    // get character limit
    var char_limit = document.getElementById("sentence-form").maxLength;
    var num_chars = document.getElementById("sentence-form").value.length;
    if (num_chars === char_limit) {
        document.getElementById("sentence-display").innerHTML = '<span style="color:red">' + num_chars + " / " + char_limit + '</span>';
    } else {
        document.getElementById("sentence-display").innerHTML = '<span>' + num_chars + " / " + char_limit + '</span>';
    }

}

/*
 * Submits the given story to the server,
 * and makes a call to get any updates
 */
function submit_sentence() {

    // get data from post
    var text = document.getElementById('sentence-form').value;

    // clear text
    document.getElementById('sentence-form').value = '';

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
            var response = JSON.parse(this.responseText);
            console.log(response);
            if (response.length < 1) {
                return; // no updates
            }
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







var stories;
var last_story_id;

// browse by genre
function display_stories(cols) {
    if (stories === undefined || stories === null) {
        console.log("Tried to render a list of stories in a given genre, but there was nothing to render");
        return;
    }

    var storiesDiv = document.getElementById("story-container");

    var index = 0;
    // iterate over each story and display it
    storiesDiv.innerHTML += '<div>';
    for (var i = 0; i < stories.length; i++){

        // add new row if index is even
        if (index % cols === 0) {
            storiesDiv.innerHTML += '</div>'
            storiesDiv.innerHTML += '<div class="row text-center">'
        }
        storiesDiv.innerHTML +=
            '<a href="read.php?s=' + stories[i].id + '">' +
            '<div class="col-md-'+ Math.floor(12/cols) +' row-height">' +
            '<div class="story-preview">' +
            '<h2>' + stories[i].title + '</h2>' +
            '<p>' +
            stories[i].content +
           '</div>' +
           '</div>' +
           '</a>'
        index++;
    }
    storiesDiv.innerHTML += '</div>';

    last_story_id = stories[stories.length-1].id;
}

/*
 * Get earlier stories posted
 */
 function start_checking_for_earlier_stories() {
     // self executing timeout functions
     var storyContainerDiv = document.getElementById("story-container");
     window.setInterval(function() {
         // check if scrolled at bottom of page
         if (storyContainerDiv.scrollTop >= storyContainerDiv.scrollHeight - storyContainerDiv.offsetHeight) {
             console.log("TRIGGER RELOAD");
         }
     }, 1000);
 }
