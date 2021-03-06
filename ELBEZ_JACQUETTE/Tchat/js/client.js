(function($){

    var socket = io.connect('http://localhost:1337');
    var msgtpl = $('#msgtpl').html();
    var lastmsg = false;

    $('#msgtpl').remove();
    $('#form').hide();

    $('#loginform').submit(function(event){
        event.preventDefault();
        socket.emit('login', {
            username : $('#username').val(),
            mail     : $('#mail').val()
        })
    });

    socket.on('logged', function() {
        $('#login').fadeOut();
        $('#form').fadeIn();
        $('#message').focus();
    });

    $('#form').submit(function(event){
        event.preventDefault();
        socket.emit('newmsg', {message: $('#message').val()});
        $('#message').val('');
        $('#message').focus();
    });

    socket.on('newmsg', function(message){
        if(lastmsg != message.user.id){
            $('#messages').append('<div class="sep"></div>');
            lastmsg = message.user.id;
        }
        $('#messages').append('<div class="message">'+ Mustache.render(msgtpl, message) + '</div>');
        $('#messages').animate({scrollTop : $('#messages').prop('scrollHeight')}, 500);
    });

    socket.on('disusr', function(user){
        $('#' + user.id).remove();
    });

})(jQuery);
