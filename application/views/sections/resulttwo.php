<!-- ================= Video + Playlist Section ================= -->
<div class="video-playlist-section rts-section-gap bg_image"
    style="background:url('<?php echo base_url('assets/images/banner/bg-shape.png'); ?>') no-repeat center/cover;">
    <div class="container">

        <!-- Section Heading -->
        <div class="row">
            <div class="col-lg-12">
                <div class="title-area-center-style text-center mb-5">
                    <div class="pre-title">
                        <img src="<?php echo base_url('assets/images/banner/bulb.png'); ?>" alt="icon">
                        <span>Interview Playlist</span>
                    </div>
                    <h2 class="title">Watch <span class="highlight">Selected IAS Interviews</span></h2>
                    <p class="post-title">Learn from real UPSC success stories and experiences</p>
                </div>
            </div>
        </div>

        <!-- Video + Playlist Row -->
        <div class="video-box">
            <!-- Video -->
            <div class="video-col">
                <div class="ratio ratio-16x9">
                    <iframe id="mainVideo" class="video-frame"
                        src="https://www.youtube.com/embed/fLRrs8ls7Sg"
                        title="IAS Interview video player" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
            <!-- Playlist -->
            <div class="playlist-wrapper">
                <div class="playlist" id="playlist"></div>
            </div>
        </div>
    </div>
</div>
<!-- ================= End Video + Playlist Section ================= -->

<style>
    :root {
        --playlist-active: #553CDF;
        --playlist-hover: #f0f4ff;
    }

    .video-frame {
        width: 100%;
        height: 480px;
        border-radius: 16px;
    }

    /* Video + Playlist Container */
    .video-box {
        background: rgba(255, 255, 255, 0.9);
        border-radius: 20px;
        padding: 25px;
        display: flex;
        flex-direction: column; /* default column (mobile-first) */
        gap: 30px; /* 👈 हमेशा gap */
    }

    @media(min-width: 992px) {
        .video-box {
            flex-direction: row; /* desktop पर row layout */
            align-items: flex-start;
            gap: 20px; /* side gap */
        }

        .video-col {
            flex: 2;
        }

        .playlist-wrapper {
            flex: 1;
            margin-top: 0;
        }
    }

    .playlist {
        max-height: 480px;
        overflow-y: auto;
        display: flex;
        flex-direction: column;
        gap: 14px;
    }

    .playlist-item {
        display: flex;
        gap: 14px;
        align-items: center;
        background: #fff;
        padding: 12px;
        border-radius: 12px;
        cursor: pointer;
        box-shadow: 0 2px 6px rgba(0, 0, 0, .08);
        transition: all .2s ease;
    }

    .playlist-item:hover {
        background: var(--playlist-hover);
        transform: translateY(-2px);
    }

    .playlist-item:hover .playlist-title,
    .playlist-item:hover .playlist-sub {
        color: var(--playlist-active);
    }

    .playlist-item.active {
        background: var(--playlist-active);
        color: #fff;
    }

    .playlist-item.active .playlist-title,
    .playlist-item.active .playlist-sub {
        color: #fff;
    }

    .playlist-thumb {
        width: 120px;
        height: 80px;
        border-radius: 8px;
        object-fit: cover
    }

    .playlist-title {
        font-size: 1.25rem;
        font-weight: 700;
        margin: 0 0 6px
    }

    .playlist-sub {
        font-size: 1rem;
        color: #555;
        margin: 0;
    }

    /* Responsive */
    @media(max-width:992px) {
        .video-frame {
            height: 360px;
        }
    }

    @media(max-width:768px) {
        .video-frame {
            height: 300px;
        }

        .playlist-thumb {
            width: 100px;
            height: 65px;
        }

        .playlist-title {
            font-size: 1.05rem;
        }
    }

    @media(max-width:480px) {
        .video-frame {
            height: 220px;
        }

        .playlist-thumb {
            width: 90px;
            height: 60px;
        }

        .playlist-title {
            font-size: 1rem;
        }
    }
</style>

<script>
    const videos = [
        {
            title: "UPSC Topper Zinnia Aurora - Mock Interview (AIR 156)", sub: "Vision IAS",
            thumb: "https://img.youtube.com/vi/fLRrs8ls7Sg/hqdefault.jpg",
            url: "https://www.youtube.com/embed/fLRrs8ls7Sg"
        },
        {
            title: "UPSC Topper Mock Interview – Srushti Jayant Deshmukh (Rank 5, CSE 2018)", sub: "UPSC Stories",
            thumb: "https://img.youtube.com/vi/OhJWg-0qdI0/hqdefault.jpg",
            url: "https://www.youtube.com/embed/OhJWg-0qdI0"
        },
        {
            title: "Ishita Kishore AIR 1 Mock Interview | UPSC CSE Topper", sub: "Vajirao & Reddy",
            thumb: "https://img.youtube.com/vi/C0NVX33zYK4/hqdefault.jpg",
            url: "https://www.youtube.com/embed/C0NVX33zYK4"
        },
        {
            title: "UPSC 2024 Topper Manu Garg Mock Interview | Vijender", sub: "Vijender Chauhan",
            thumb: "https://img.youtube.com/vi/dZieJt4wj9s/hqdefault.jpg",
            url: "https://www.youtube.com/embed/dZieJt4wj9s"
        },
        {
            title: "IAS Interview Experience – Uma Harati", sub: "Personal Story",
            thumb: "https://img.youtube.com/vi/pK7xeWuvB_w/hqdefault.jpg",
            url: "https://www.youtube.com/embed/pK7xeWuvB_w"
        }
    ];

    const playlistEl = document.getElementById("playlist");
    const mainVideo = document.getElementById("mainVideo");

    videos.forEach((v, i) => {
        const div = document.createElement("div");
        div.className = "playlist-item";
        if (i === 0) div.classList.add("active");
        div.innerHTML = `
            <img src="${v.thumb}" class="playlist-thumb" alt="${v.title}">
            <div>
                <p class="playlist-title">${v.title}</p>
                <p class="playlist-sub">${v.sub}</p>
            </div>
        `;
        div.onclick = () => playVideo(i);
        playlistEl.appendChild(div);
    });

    function playVideo(index) {
        mainVideo.src = videos[index].url;
        document.querySelectorAll(".playlist-item").forEach(el => el.classList.remove("active"));
        playlistEl.children[index].classList.add("active");
    }
</script>

