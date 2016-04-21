(function ($) {
    var numHeaderRows = 2;

    var request = $.ajax({
        url: "/api/varsity/scoreboard",
        type: "get",
        dataType: "json",
        data: {}
    });

    request.done(function (data) {
        var csv = data.csv;

        var rows = csv.split("\r\n");

        var $table = $("<table>");

        $.each(rows, function (i, row) {
            var tds = row.split(",");

            if (i < numHeaderRows) {
                $thead = $table.find("thead");

                if (!$thead.length) {
                    $thead = $("<thead>");
                    $table.append($thead);
                }

                var $tr = $("<tr>");

                $.each(tds, function (i, td) {
                    var $th = $("<th>");
                    $th.text(td);
                    $tr.append($th);
                });

                $thead.append($tr);
                $table.append($thead);
            }
            else {
                $tbody = $table.find("tbody");

                if (!$tbody.length) {
                    $tbody = $("<tbody>");
                    $table.append($tbody);
                }

                var $tr = $("<tr>");

                $.each(tds, function (i, td) {
                    var $td = $("<td>");
                    $td.text(td);
                    $tr.append($td);
                });

                $tbody.append($tr);
            }
        });

        $(".varsity-scoreboard").append($table);
    });

})(jQuery);
