$('#home').addClass('active');
$('.partner').dimmer({
        opacity: '0.1',
        on: 'hover'
    });
    $('#home-gallery').nanoGallery(

            {
                thumbnailWidth: 'auto',
                thumbnailHeight: 250,

                theme: "light",

                //thumbnailAlignment: "justified",
                thumbnailGutterWidth : 0,
                thumbnailGutterHeight : 0,
                thumbnailHoverEffect: [{ name: 'labelAppear75', duration: 300 }],
                thumbnailLabel: {
                                    display: true,
                                    position: 'overImageOnMiddle',
                                    align: 'center',
                                    hideIcons: true,
                                },
                fnThumbnailOpen: function(items){
                    window.location.href=items[0].src;
                },
                items: [
                    {
                        src:'/about',
                        srct:'/images/thumbnails/lasvegas.jpg',
                        title: "LasVegas"
                    },
                    {
                        src: '/about',
                        srct: '/images/thumbnails/newyork.jpg',
                        title: 'NewYork'
                    },
                    {
                        src: '/about',
                        srct: '/images/thumbnails/london.jpg',
                        title: 'London'
                    },
                    {
                        src: '/about',
                        srct: '/images/thumbnails/chicago.jpg',
                        title: 'Chicago'
                    },
                    {
                        src: '/about',
                        srct: '/images/thumbnails/paris.jpg',
                        title: 'Paris'
                    },
                    {
                        src: '/about',
                        srct: '/images/thumbnails/tokyo.jpg',
                        title: 'Tokyo'
                    },
                    {
                        src: '/about',
                        srct: '/images/thumbnails/orlando.jpg',
                        title: 'Orlando'
                    },
                    {
                        src: '/about',
                        srct: '/images/thumbnails/sydney.jpg',
                        title: 'Sydney'
                    },
                    {
                        src: '/about',
                        srct: '/images/thumbnails/losangeles.jpg',
                        title: 'Los Angeles (LA)'
                    }]
            }

    );
