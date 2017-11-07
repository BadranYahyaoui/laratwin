$(document).ready(function () {

    showAll()

    function showAll(row) {
        var domTable = $("table")

        if (!row) {
            $.get('/api/task', function (data) {
                console.log(data);
                var table = [];
                $.each(data, function (key, value) {
                    table.push("<tr> " +
                        "<td>" + value.id + "</td>" +
                        "<td>" + value.name + "</td>" +
                        "<td>" + value.description + "</td>" +
                        "<td>" + value.status + "</td>" +
                        +"</tr>"
                    )
                })
                domTable.append(table)
            });
        }
        else {
            var domRow = "<tr> " +
                "<td>" + row.id + "</td>" +
                "<td>" + row.name + "</td>" +
                "<td>" + row.description + "</td>" +
                "<td>" + row.status + "</td>" +
                +"</tr>"
            domTable.append(domRow)

        }

    }


    $('#btn').on('click', function (event) {
        event.preventDefault()
        var name = $('#name').val()
        var description = $('#description').val()
        var status = $('#status').val()
        var user_id = $('#user_id').val()
        var data = {
            name,
            description,
            status,
            user_id
        }

        // console.log(data)
        $.post('/api/task', data, function (response) {
            console.log("res0,", response)
            showAll(response)
        })
    })


});