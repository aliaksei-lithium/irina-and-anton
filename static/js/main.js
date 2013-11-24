var APP = APP || {};

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

function setFocus() {
    $("#owner-name").focus();
}

APP._startTime = 500;
APP.pictureTransform = {
    style : {
        duration : 2000,
        klass: "skrollable skrollable-before",
        steps : [
            {count: 0, value: "display:block;top[cubic]:100%;border-radius[cubic]:0em;background:rgb(0,50,100);border-width:0px;"},
            {count: 2000, value: "top:10%;border-radius:2em;background:rgb(236,240,241);border-width:10px;"}
        ]
    }
};
APP.transforms = [
    {"style": {
        duration: 1200,
        klass: "transform-style-1 skrollable skrollable-before",
        steps: [
            {count: 0, value: "transform:scale(0) rotate(0deg);"},
            {count: 500, value: "transform:scale(1) rotate(1440deg);opacity:1;"},
            {count: 600, value: ""},
            {count: 100, value: "transform:scale(5) rotate(3240deg);opacity:0;"}
        ]
    }
    },

    {"style": {
        duration: 2000,
        klass: "transform-style-2 skrollable skrollable-before",
        steps: [
            {count: 0, value: "top:100%;"},
            {count: 500, value: "top:0%;"},
            {count: 800, value: "display:block;"},
            {count: 700, value: "top:-100%;display:none;"}
        ]

    }},

    {"style": {
        duration: 1600,
        klass: "transform-style-3 skrollable skrollable-between",
        steps: [
            {count: 0, value: "left:100%;display:block;"},
            {count: 700, value: "left:25%;"},
            {count: 400, value: ""},
            {count: 500, value: "left:-20%; display:none;"}
        ]
    }}
];

APP.printComments = function(comments) {
    var wrapper = $(".comments-wrapper");
    for (var i = 0, len = comments.length; i < len; i++) {
        var elem = APP.transforms[Math.floor(Math.random()*APP.transforms.length)];
        var $block = APP._createCommentBlock(comments[i]);
        APP._stylishCommentBlock($block, elem.style);

        wrapper.append($block);
    }
    APP.addPictures();
    APP.initSkroll();
};

APP._createCommentBlock = function(comment) {
    var $block = $("<div></div>").addClass("comment-block").attr("comm_id", comment.comment_id)
        .append($("<blockquote></blockquote>")
            .append($("<p></p>").html(comment.text.replace(/\n/g, "<br />")))
            .append($("<small></small>").text(comment.owner_name))
        );
    return $block;
};

APP._stylishCommentBlock = function($block, style) {
    var steps = style.steps;
    $block.addClass(style.klass);
    for (var i = 0, len = steps.length; i < len; i++) {
        APP._startTime += steps[i].count;
        if (i === 0) {
            $block.attr("data-menu-link", APP._startTime + style.duration);
        }
        $block.attr("data-" + APP._startTime , steps[i].value);
    }
};

APP.addPictures = function() {
    var $block = $("#photos");
    APP._stylishCommentBlock($block, APP.pictureTransform.style);
};

APP.initSkroll = function() {
    var s = skrollr.init({
        edgeStrategy: 'set'
    });

    skrollr.menu.init(s, {

        animate: false,

        duration: function(currentTop, targetTop) {
            return 500;
        }

    });

    $("#photos-link").attr("data-menu-top", $("#photos").attr("data-menu-link"));

    $("body").css("height", APP._startTime + 1000);
};