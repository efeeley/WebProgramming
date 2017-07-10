$(document).ready(function () {
    $('.selector').click(function () {
        var campus = $("input[@name=campus]:checked").val();

        if (campus == "louisville") {
            $('#menu li:hover div a').css({ 'color': '#015b86' });
            $('#menu li:hover div a').css({ 'color': 'gray' });
            $('.louis a, .lex-louis a, .lex-louis-fort a, .all a, .louis-fort a, .louis-on a, .lex-louis-on a, .louis-fort-on a').css({ 'color': '#015b86' });
        }

        else if (campus == "lexington") {
            $('#menu li:hover div a').css({ 'color': '#015b86' });
            $('#menu li:hover div a').css({ 'color': 'gray' });
            $('.lex a, .lex-louis a, .lex-louis-fort a, .all a, .lex-fort a, .lex-on a, .lex-louis-on a, .lex-fort-on a').css({ 'color': '#015b86' });
        }

        else if (campus == "fort_knox") {
            $('#menu li:hover div a').css({ 'color': '#015b86' });
            $('#menu li:hover div a').css({ 'color': 'gray' });
            $('.fort a, .louis-fort a, .lex-louis-fort a, .all a, .lex-fort a, .fort-on a, .louis-fort-on a, .lex-fort-on a').css({ 'color': '#015b86' });
        }

        else if (campus == "on_line") {
            $('#menu li:hover div a').css({ 'color': '#015b86' });
            $('#menu li:hover div a').css({ 'color': 'gray' });
            $('.on a, .lex-on a, .lex-fort-on a, .all a, .fort-on a, .louis-on a, .lex-louis-on a, .louis-fort-on a').css({ 'color': '#015b86' });
        }
    });
});