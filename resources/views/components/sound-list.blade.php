<link href={{ asset('css/audio-list.css') }} rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.plyr.io/3.6.8/plyr.css" />
<style>
    .sound-img {
        height: 120%;
        left: 50%;
        position: absolute;
        top: 50%;
        transform: translate(-50%, -50%);
        transition: 0.3s;
        max-width: none;
        width: auto;
    }

    .sound-div {
        position: relative;
        height: 185px;
        width: 100%;
        overflow: hidden;
        border-radius: 23px;
    }

    .overflow-auto::-webkit-scrollbar {
        width: 12px;
    }

    .overflow-auto::-webkit-scrollbar-track {
        background: #313131;
    }

    .overflow-auto::-webkit-scrollbar-thumb {
        background-color: #0cced4;
        border-radius: 20px;
        border: 3px solid;
    }

    /* Works on Firefox */
    .overflow-auto {
        scrollbar-width: thin;
        scrollbar-color: #0cced4 #313131;
    }

    /* Works on Chrome, Edge, and Safari */
    .overflow-auto::-webkit-scrollbar {
        width: 15px;
    }

    .overflow-auto::-webkit-scrollbar-track {
        background: #313131;
    }

    .overflow-auto::-webkit-scrollbar-thumb {
        background-color: #0cced4;
        border-radius: 20px;
        border: 3px solid;
    }

</style>
<br>
<div class="column add-bottom">
    <div id="mainwrap">
        <div class="sound-container">
            <div class="row">
                <div class="col-md-3 mb-3">
                    <div class="sound-div">
                        <img class="sound-img" src="" alt="Card image cap">
                    </div>
                </div>
                <div class="col-md-9">
                    <div id="npTitle"></div>
                    <div id="npAction">Paused...</div>
                    <div id="audiowrap">
                        <div id="audio0">
                            <audio id="audio1" preload controls>Your browser does not support HTML5 Audio! 😢</audio>
                        </div>
                        <div id="tracks">
                            <a id="btnPrev">&larr;</a><a id="btnNext">&rarr;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <hr>
        <button class="btn btn-primary" data-toggle="modal" data-target="#add-sound">
            <i class="fas fa-plus"></i> Add sound
        </button>
        <br> <br>
        <div class="overflow-auto" style="height: 500px">
            <div id="plwrap">
                <ul id="plList" class="list-colors">
                    @foreach ($sounds as $key => $sound)
                        <li class="list-colors-item">
                            <div class="plItem">
                                <span class="plNum">{{ $key + 1 }}</span>
                                <span class="plTitle">{{ $sound->sound->full_name }}</span>
                                <span class="plLength">{{ $sound->sound->time }}</span>
                                <span class="plLengthMove" data-sound="{{ $sound->sound->id }}">
                                    <i class="fas fa-share"></i>
                                </span>
                                <span class="plLengthDelete" data-sound="{{ $sound->sound->id }}">
                                    <i class="fas fa-trash"></i>
                                </span>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@include('components.modal-share-sound')

<script src="https://cdn.plyr.io/3.6.8/plyr.js"></script>
<script>
    $(document).on('click', '.plLengthMove', function(event) {
        event.preventDefault();

        $('#sound-share-id').val($(this).data('sound'));
        $('#shareSoundToList').modal('show');
    })

    jQuery(function($) {
        'use strict'
        var supportsAudio = !!document.createElement('audio').canPlayType;
        if (supportsAudio) {
            // initialize plyr
            var player = new Plyr('#audio1', {
                controls: [
                    'restart',
                    'play',
                    'progress',
                    'current-time',
                    'duration',
                    'mute',
                    'volume',
                    'download'
                ]
            });

            // initialize playlist and controls
            var tranksMake = [];

            @foreach ($sounds as $key => $sound)
                var imageYoutube = 'http://img.youtube.com/vi/' + '{{ $sound->sound->video_id }}' +'/maxresdefault.jpg';
            
            
                tranksMake.push({
                'track': '{{ $key + 1 }}',
                'name': '{{ $sound->sound->full_name }}',
                'duration': '{{ $sound->sound->time }}',
                'file': '/{{ $sound->sound->slug }}',
                'image': imageYoutube,
                });
            @endforeach
            var index = 0,
                playing = false,
                mediaPath = "{{ url('sounds') }}",
                extension = '',
                tracks = tranksMake,
                buildPlaylist = $.each(tracks, function(key, value) {
                    var trackNumber = value.track,
                        trackName = value.name,
                        trackDuration = value.duration;
                    if (trackNumber.toString().length === 1) {
                        trackNumber = '0' + trackNumber;
                    }
                }),
                trackCount = tracks.length,
                npAction = $('#npAction'),
                npTitle = $('#npTitle'),
                audio = $('#audio1').on('play', function() {
                    playing = true;
                    npAction.text('Now Playing...');
                }).on('pause', function() {
                    playing = false;
                    npAction.text('Paused...');
                }).on('ended', function() {
                    npAction.text('Paused...');
                    if ((index + 1) < trackCount) {
                        index++;
                        loadTrack(index);
                        audio.play();
                    } else {
                        audio.pause();
                        index = 0;
                        loadTrack(index);
                    }
                }).get(0),
                btnPrev = $('#btnPrev').on('click', function() {
                    if ((index - 1) > -1) {
                        index--;
                        loadTrack(index);
                        if (playing) {
                            audio.play();
                        }
                    } else {
                        audio.pause();
                        index = 0;
                        loadTrack(index);
                    }
                }),
                btnNext = $('#btnNext').on('click', function() {
                    if ((index + 1) < trackCount) {
                        index++;
                        loadTrack(index);
                        if (playing) {
                            audio.play();
                        }
                    } else {
                        audio.pause();
                        index = 0;
                        loadTrack(index);
                    }
                }),
                li = $('#plList li').on('click', function() {
                    var id = parseInt($(this).index());
                    if (id !== index) {
                        playTrack(id);
                    }
                }),
                loadTrack = function(id) {
                    $('.plSel').removeClass('plSel');
                    $('#plList li:eq(' + id + ')').addClass('plSel');
                    npTitle.text(tracks[id].name);
                    index = id;
                    audio.src = mediaPath + tracks[id].file + extension;
                    updateDownload(id, audio.src);
                    $.ajax({
                        url: tracks[id].image,
                        type: 'HEAD',
                        error: function() {
                            $(".sound-img").attr("src", "{{ url('images/defaultsound.jpg') }}");
                        },
                        success: function() {
                            $(".sound-img").attr("src", tracks[id].image);
                        }
                    });

                },
                updateDownload = function(id, source) {
                    player.on('loadedmetadata', function() {
                        $('a[data-plyr="download"]').attr('href', source);
                    });
                },
                playTrack = function(id) {
                    loadTrack(id);
                    audio.play();
                };
            extension = audio.canPlayType('audio/mpeg') ? '.mp3' : audio.canPlayType('audio/ogg') ? '.ogg' : '';
            loadTrack(index);

            $(document).on('click', '.plyr__progress__buffer', function(e) {
                alert("hola")
                var percent = e.offsetX / this.offsetWidth;
                audio.currentTime = percent * audio.duration;
                progressBar.value = percent / 100;
            })
        } else {
            // no audio support
            $('.column').addClass('hidden');
            var noSupport = $('#audio1').text();
            $('.container').append('<p class="no-support">' + noSupport + '</p>');
        }
    });
</script>
