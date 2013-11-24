function gotoComments() {
    window.location.href = "/addComment.php"
}

function gotoIndex() {
    window.location.href = "/index.php"
}

function submitComment() {
    var $form = $("#comment-form"),
        $owner = $("#owner-name"),
        $text = $("#comment-text"),
        isValid = true;
    if ($owner.val().length === 0) {
        $owner.stop().animate({ borderColor: "#E74C3C"}, "fast")
            .delay("500").animate({ borderColor: "#BDC3C7"}, "fast");
        $owner.focus();
        isValid = false;
    } else if ($text.val().length === 0) {
        $text.stop().animate({borderColor: "#E74C3C"}, "fast")
            .delay("500").animate({borderColor: "#BDC3C7"}, "fast");
        $text.focus();
        isValid = false;
    }
   if (isValid) {
       $form.submit();
   }
}