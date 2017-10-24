$(document).ready(function () {


    $.get('/api/task/all', function (data) {
        console.log(data)
        var table = [];

        var domTable = $("table")
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
    })


    $('#btn').on('click',function(event) {
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
        console.log(data)
        $.post('/api/task/create',data,function (response) {
            console.log(response)
        })
    })

});