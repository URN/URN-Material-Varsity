(function ($) {
    "use strict";

    var $matchesContainer = $(".varsity-matches");
    var $scoresContainer = $(".varsity-scores");

    var matchesRequest = $.ajax({
        url: "/api/varsity/matches",
        type: "get",
        dataType: "json",
        data: {}
    });

    var scoresRequest = $.ajax({
        url: "/api/varsity/scores",
        type: "get",
        dataType: "json",
        data: {}
    });

    matchesRequest.done(function (data) {
        var csv = data.csv;

        var rows = csv.split("\r\n");

        if (rows.length < 2) {
            return;
        }

        var $tbody = $matchesContainer.find("tbody");

        $.each(rows, function (i, row) {
            // First row is headings
            if (i == 0) {
                return;
            }

            var tds = row.split(",");

            var $tr = $("<tr>");

            $.each(tds, function (i, td) {
                var $td = $("<td>");
                $td.text(td);
                $tr.append($td);
            });

            $tbody.append($tr);
        });

        $matchesContainer.show();
    });

    scoresRequest.done(function (data) {
        var csv = data.csv;

        var rows = csv.split("\r\n");

        if (rows.length < 2) {
            return;
        }

        $scoresContainer.find(".uon-points").text(rows[0].split(",")[1]);
        $scoresContainer.find(".ntu-points").text(rows[1].split(",")[1]);

        $scoresContainer.show();
    });

})(jQuery);
