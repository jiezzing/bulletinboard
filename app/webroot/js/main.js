$(function() {

    $('.dataTables-example').DataTable({
        pageLength: 25,
        responsive: true,
        buttons: []
    });

	$('#create-article-btn').on('click', function(e) {
		e.preventDefault();
		var title = $('#title').val();
		var content = $('#content').val();

		$.ajax({
            type: 'POST',
            url: '/bulletinboard/articles/save',
            cache: false,
            data: {
                title: title,
                content: content
            },
            dataType: 'json',
            success: function(response) {
                if (response.status) {
                    return toastr.success(response.message, response.type);
                }
                else {
                    return toastr.error(response.message, response.type);
                }
            },      
            error: function (response, desc, exception) {
                alert(exception);
            }
        })
	})

    $('#update-article-btn').on('click', function(e) {
        e.preventDefault();

        var id = $('#update-article-btn').attr('value');
        var title = $('#title').val();
        var content = $('#content').val();

        $.ajax({
            type: 'POST',
            url: '/bulletinboard/articles/update',
            cache: false,
            data: {
                id: id,
                title: title,
                content: content
            },
            dataType: 'json',
            success: function(response) {
                if (response.status) {
                    return toastr.success(response.message, response.type);
                }
                else {
                    return toastr.error(response.message, response.type);
                }
            },      
            error: function (response, desc, exception) {
                alert(exception);
            }
        })
    })

    $('#upvote-btn').on('click', function(e) {
        e.preventDefault();

        var id = $('#upvote-btn').attr('value');

        $.ajax({
            type: 'POST',
            url: '/bulletinboard/articles/upvote',
            cache: false,
            data: {
                id: id
            },
            dataType: 'json',
            success: function(response) {
                if (response.status) {
                    return toastr.success(response.message, response.type);
                }
                else {
                    return toastr.error(response.message, response.type);
                }
            },      
            error: function (response, desc, exception) {
                alert(exception);
            }
        })
    })

    $('#downvote-btn').on('click', function(e) {
        e.preventDefault();

        var id = $('#downvote-btn').attr('value');

        $.ajax({
            type: 'POST',
            url: '/bulletinboard/articles/downvote',
            cache: false,
            data: {
                id: id
            },
            dataType: 'json',
            success: function(response) {
                if (response.status) {
                    return toastr.success(response.message, response.type);
                }
                else {
                    return toastr.error(response.message, response.type);
                }
            },      
            error: function (response, desc, exception) {
                alert(exception);
            }
        })
    })

    $(document).on('click', '.delete-article', function(event) {
        event.preventDefault();

        var id = $(this).attr('value');

        $.ajax({
            type: 'POST',
            url: '/bulletinboard/articles/delete',
            cache: false,
            data: {
                id: id
            },
            dataType: 'json',
            success: function(response) {
                if (response.status) {
                    return toastr.success(response.message, response.type);
                }
                else {
                    return toastr.error(response.message, response.type);
                }
            },      
            error: function (response, desc, exception) {
                alert(exception);
            }
        })
    })

})