console.log("JAVASCRIPT LOADED");

if (contributions != undefined) {
    render_fragments();
}

function render_fragments() {
    if (contributions === undefined || contributions === null) {
        console.log("Tried to render story fragments, but there was nothing to render");
        return;
    }

    for (var f in contributions) {
        console.log(f);
    }
}
