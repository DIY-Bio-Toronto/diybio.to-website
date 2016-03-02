document.getElementById( 'slide' ).addEventListener( 'click', function() {
    var body = document.getElementById( 'slide-body' );
    if( body.className == 'expanded' ) {
        body.className = '';
        document.getElementById( 'more' ).textContent = 'more...';
    } else {
        body.className = 'expanded';
        document.getElementById( 'more' ).textContent = 'less...';
    };
} );
