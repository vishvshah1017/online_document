{{-- {{ print_r($field_data, true) }} --}}

<style>
    @import url("https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap");

    * {
        --dark: #393939;
        --red: #d12229;
    }

    body {
        margin: 0;
        font-family: Roboto, Arial, Helvetica, sans-serif;
        position: relative;
    }

    .credit {
        position: absolute;
        top: 15px;
        right: 10px;
        border-radius: 10px;
        padding: 10px;
        background-color: rgb(248, 92, 113);
        cursor: pointer;
        z-index: 2;
        overflow: hidden;
    }

    .credit a {
        text-decoration: none;
        color: #eee;
        padding: 10px;
    }

    .credit:after {
        box-sizing: border-box;
        content: "";
        border: 8px solid;
        border-color: transparent transparent transparent #eee;
        width: 8px;
        height: 8px;
        position: absolute;
        right: 1px;
        top: 50%;
        transform: translateY(-50%);
        transition: all 0.5s;
    }

    .credit:hover::after {
        right: -3px;
    }

    .test {
        background-color: #1769ff;
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: -100%;
        transition: 0.5s ease-in-out;
        z-index: -1;
    }

    .credit:hover .test {
        left: 0;
    }

    .business2 {
        display: flex;
        align-items: center;
        min-height: 100vh;
        justify-content: center;
        background-color: #131417;
    }

    .business2 .front,
    .business2 .back {
        background-color: var(--dark);
        width: 280px;
        height: 480px;
        margin: 20px;
        border-radius: 25px;
        overflow: hidden;
        position: relative;
    }

    .business2 svg {
        width: 50px;
    }

    .business2 h1,
    .business2 h2,
    .business2 p {
        margin: 0;
        color: #eee;
    }

    .business2 .red {
        height: 35%;
        background-color: var(--red);
    }

    .business2 .head {
        display: flex;
        justify-content: center;
        padding: 25px 0;
    }

    .business2 .head img {
        width: 40px;
    }

    .business2 .head>div {
        text-align: center;
        margin: 0 10px;
        text-transform: uppercase;
    }

    .business2 .head>div p {
        font-size: 0.8rem;
        font-weight: 600;
    }

    .business2 .avatar {
        position: absolute;
        width: 50%;
        left: 50%;
        top: 100px;
        transform: translate(-50%);
        text-align: center;
    }

    .business2 .img {
        background-color: #bfc2c7;
        padding: 10px;
        box-sizing: border-box;
        border-radius: 50%;
        border: 6px solid var(--dark);
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .business2 .img img {
        width: 80%;
        padding: 10px 0;
    }

    .business2 .avatar p:nth-of-type(1) {
        text-transform: uppercase;
        font-weight: 900;
    }

    .business2 .infos {
        position: absolute;
        bottom: 5%;
        left: 5%;
    }

    .business2 .infos>div {
        display: flex;
        margin: 5px;
    }

    .business2 .infos>div svg {
        width: 25px;
        height: 25px;
        margin-right: 10px;
        background-color: var(--red);
        padding: 8px;
        border-radius: 7px;
    }

    .business2 .infos>div p {
        font-size: 0.8rem;
        margin: 5px 0;
        font-weight: 500;
    }

    /* back*/
    .business2 .back .top {
        width: 100%;
        box-sizing: border-box;
        height: 70%;
        background: url("https://raw.githubusercontent.com/MohcineDev/Business-Card/main/imgs/e.webp") center;
        filter: contrast(160%);
        position: relative;
    }

    .business2 .back .top::after {
        content: "";
        width: 100%;
        height: 100%;
        position: absolute;
        z-index: 10;
        background: linear-gradient(rgba(71, 11, 11, 0.8), rgba(240, 8, 8, 0.5));
    }

    .business2 .back .top {
        position: relative;
    }

    .business2 .back .top div img {
        width: 40px;
        margin: 10px;
    }

    .business2 .back .top div {
        position: absolute;
        display: flex;
        flex-direction: column;
        align-items: center;
        top: 40%;
        left: 19%;
        z-index: 11;
        filter: contrast(80%);
        text-transform: uppercase;
    }

    .webicon {
        background-color: var(--dark);
        border-radius: 50%;
        width: 70%;
        padding: 20px 0;
        position: absolute;
        top: calc(70% - 40px);
        left: 15%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .webicon div {
        background-color: var(--red);
        border-radius: 50%;
        padding: 5px 4px 2px 5px;
    }

    .business2 .back>p {
        text-align: center;
        margin-top: 30%;
        color: var(--red);
    }

    /* .circular_image {
        width: 100%;
        height: 100px;
        object-fit: cover;
        border-radius: 50%;

        overflow: hidden;
        margin-bottom: 25px;
        margin-top: 0px;
        background-position: center;
        display: inline-block;

    }

    .circular_image img {
        width: 100%;
        background-size: cover;
    } */

    .circular--landscape {
        display: inline-block;
        position: relative;
        width: 100px;
        height: 100px;
        overflow: hidden;
        border-radius: 50%;
        margin-bottom: 25px;
        border-radius: 50%;
        border: 6px solid var(--dark);
    }

    .circular--landscape img {
        width: auto;
        height: 100%;

    }

</style>

<div class="business2">

    <div class="front">
        <div class="red">

            <div class="head">
                <img src="{{ asset(arrayhaskeythenreturnitsvalue($field_data,'bc-clogo')) }}"
                    alt="logo">
                <div>
                    <h2>{{ arrayhaskeythenreturnitsvalue($field_data,'bc-title') }}</h2>
                    <p>{{ arrayhaskeythenreturnitsvalue($field_data,'bc-tagline') }}</p>
                </div>
            </div>
        </div>
        <div class="avatar">
            <div class="circular--landscape">

                <img class="rounded" src="{{ asset(arrayhaskeythenreturnitsvalue($field_data,'bc-img')) }}" alt="">
            </div>
            <p>{{arrayhaskeythenreturnitsvalue( $field_data,'bc-name')}}</p>
            <p>{{arrayhaskeythenreturnitsvalue($field_data,'bc-desg') }}</p>
        </div>
        <div class="infos">
            <div>
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 513.64 513.64"
                    style="enable-background:new 0 0 513.64 513.64;" xml:space="preserve">
                    <path d="M499.66,376.96l-71.68-71.68c-25.6-25.6-69.12-15.359-79.36,17.92c-7.68,23.041-33.28,35.841-56.32,30.72
                                  c-51.2-12.8-120.32-79.36-133.12-133.12c-7.68-23.041,7.68-48.641,30.72-56.32c33.28-10.24,43.52-53.76,17.92-79.36l-71.68-71.68
                                  c-20.48-17.92-51.2-17.92-69.12,0l-48.64,48.64c-48.64,51.2,5.12,186.88,125.44,307.2c120.32,120.32,256,176.641,307.2,125.44
                                  l48.64-48.64C517.581,425.6,517.581,394.88,499.66,376.96z" />
                </svg>
                <div>
                    <p>{{ arrayhaskeythenreturnitsvalue($field_data,'bc-phone') }}</p>

                </div>
            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
                    <g id="Layer_7" data-name="Layer 7">
                        <path style="fill: #000;;"
                            d="M47,27.57h0a21.55,21.55,0,0,0-.43-7.29.71.71,0,0,0,0-.41l-.27-1.06-.13,0a22.07,22.07,0,0,0-3-6.15.7.7,0,0,0-.15-.63l-.54-.73-.1-.13-.06.05.05-.06-.13.1h0a.63.63,0,0,1,.16.36,22.51,22.51,0,0,0-5.18-4.8c0-.25-.17-.52-.64-.81L36.45,6l-.3-.18-.07,0-.35-.2-.08,0-.35-.19a17.5,17.5,0,0,0-6.69-1.95h0l-.5,0h-.05v0L28,3.41h0v0h0v0l0,0v0l-.52-.1h0a18.63,18.63,0,0,0-3.4-.32,18.29,18.29,0,0,0-4.49.56l-.43.11-.28.09c-.55.19-.66.44-.63.63a22.66,22.66,0,0,0-6.33,3.27.52.52,0,0,1,.28-.48L12.12,7h0l0,.06-.1-.12-.14.1-.72.55a.67.67,0,0,0-.3.72,22.35,22.35,0,0,0-4.67,5.28.59.59,0,0,1,.07-.29l0,0-.13-.08-.56.94a.75.75,0,0,0-.06.59,21.69,21.69,0,0,0-2.38,6.71h-.1L3,21.86,3,22.55a.59.59,0,0,0,0,.33,21.42,21.42,0,0,0,.47,7.36h0l0,.18c0,.13.07.27.1.39s.07.27.11.4l0,.11c.07.24.15.49.23.73s.23.59.35.9l.15-.06c-.12-.33-.24-.67-.35-1A6.69,6.69,0,0,0,5.9,33c.29.14.61.29,1,.43a19.65,19.65,0,0,0,2.43,5.77L8.73,39a4.46,4.46,0,0,1-1.47-1l0-.05L7.1,38l.67.87a4.3,4.3,0,0,0,1.45,1c.22.11.47.22.74.33a16.07,16.07,0,0,0,3.73,3.68l0,.1,1,.57.12.06.41.19c.4.21.81.41,1.23.58l.28.12.41.16h0l0-.07v-.08l-.41-.17-.12-.05c.45.13.94.26,1.46.38a5,5,0,0,0,1.8.84l.28.07,0-.08v-.08A3.64,3.64,0,0,1,19,45.87c.92.2,1.92.38,2.91.52-.05.49-.05.49,0,.51l.26,0c.12,0,.23-.14.36-.45,1,.13,2,.23,3,.28a4.78,4.78,0,0,1-1.29.18H24v.16l.45,0h.07a6.15,6.15,0,0,0,1.9-.31l.83,0,.79,0v.1l.55-.08.71-.13.24,0,1.14-.27v0a16.55,16.55,0,0,0,5.18-2.66,4.6,4.6,0,0,0,1.89-.59l.88-.65-.1-.13,0,0a4.29,4.29,0,0,1-1.63.55A19.58,19.58,0,0,0,40.88,38a4.78,4.78,0,0,0,2.72-1h0l.35-.56c.07-.11.13-.23.22-.37l0-.08-.07,0-.07,0,.08,0,.07,0-.14-.07L44,36a4.5,4.5,0,0,1-2.58,1,22.92,22.92,0,0,0,2.23-6.72,5.93,5.93,0,0,0,2.8-1A21.14,21.14,0,0,1,44.58,35l.15.07c.15-.3.29-.59.43-.85l.61-1.47a20.78,20.78,0,0,0,1-3.86.74.74,0,0,0,0-.14L47,28l.06-.44h0ZM12.12,7h0l0-.06Zm25,.09A22.56,22.56,0,0,1,42.28,12a3.56,3.56,0,0,1-2,.7A22.64,22.64,0,0,0,36,7.52,2.22,2.22,0,0,0,37.11,7.09ZM26.63,12.17c-2.08-.29-4.16-.67-6-1.08a24.15,24.15,0,0,1,3.06-4.55c1.15.26,2.43.49,3.71.67C27.15,8.6,26.9,10.28,26.63,12.17Zm1,1.18c2.29.3,4.5.5,6.61.6a39.57,39.57,0,0,1,.93,6.67c-2.59-.12-5.36-.37-8.24-.74C27.2,17.57,27.44,15.37,27.63,13.35Zm-10,4.9a44.29,44.29,0,0,1,2.51-6.2c2,.44,4.19.83,6.39,1.15-.29,2-.6,4.17-.94,6.49C22.81,19.29,20.06,18.8,17.58,18.25Zm7.79,2.63c-.33,2.36-.68,4.83-1,7.33-3-.43-6-1-8.72-1.57a52.4,52.4,0,0,1,1.6-7.23C19.76,20,22.57,20.48,25.37,20.88Zm-5.77-10a39.56,39.56,0,0,1-4.7-1.37,21.93,21.93,0,0,1,5.22-3.94A23.16,23.16,0,0,0,23,6.38,24.54,24.54,0,0,0,19.6,10.86Zm-.54,1A39.89,39.89,0,0,0,16.35,18a51.33,51.33,0,0,1-6.21-1.82,27,27,0,0,1,3.95-5.8A41.71,41.71,0,0,0,19.06,11.81ZM16,19.12a48,48,0,0,0-1.68,7.21,55.59,55.59,0,0,1-6.8-2,27.54,27.54,0,0,1,2.13-7.08A53.15,53.15,0,0,0,16,19.12Zm-.52,8.79c2.71.6,5.72,1.14,8.72,1.56-.35,2.47-.66,4.75-.95,6.8-2.79-.4-5.59-.91-8.12-1.46A44.68,44.68,0,0,1,15.44,27.91Zm9,9.59c2.86.37,5.62.62,8.2.74a21.87,21.87,0,0,1-2.58,4.88c-2.06-.1-4.26-.29-6.54-.59C23.82,41.12,24.13,39.43,24.45,37.5Zm.18-1c.34-2.08.69-4.36,1-6.78,3.15.41,6.18.68,9,.82A38.63,38.63,0,0,1,33,37.22C30.38,37.1,27.56,36.84,24.63,36.46Zm1.21-8c.34-2.46.66-4.93.95-7.34,2.95.38,5.78.64,8.44.77a46.87,46.87,0,0,1-.37,7.39C32,29.1,29,28.82,25.84,28.41ZM35,12.93a22.83,22.83,0,0,0-2.34-5.24h.8a18.54,18.54,0,0,0,2-.1,22,22,0,0,1,4.19,5.21A28.53,28.53,0,0,1,36.5,13ZM36.84,14a30,30,0,0,0,3.39-.17,26.22,26.22,0,0,1,2.38,6.65,38.68,38.68,0,0,1-4.19.2l-2,0A36,36,0,0,0,35.32,14ZM35.58,5.64l.1.06c.3.18.47.35.49.49a22.53,22.53,0,0,0-5.9-2.43A18.78,18.78,0,0,1,35.58,5.64Zm.49.78a2.23,2.23,0,0,1-1,.34,18.75,18.75,0,0,0-5.37-2.95A22.18,22.18,0,0,1,36.07,6.42ZM29,3.76a17.51,17.51,0,0,1,5.58,3.07c-.46,0-1,.07-1.61.07l-.82,0a11.07,11.07,0,0,0-3.21-3.11Zm-.83,0,.39,0a9.6,9.6,0,0,1,2.92,3.09c-1-.06-2.16-.16-3.32-.31A23.7,23.7,0,0,0,28.15,3.74Zm0,3.57c1.33.17,2.62.29,3.84.35a23.87,23.87,0,0,1,2,5.23c-2-.09-4.08-.28-6.25-.57C27.9,10.4,28,8.71,28.1,7.31Zm-.6-3.67.39.07c-.09.58-.24,1.52-.42,2.75-1.1-.16-2.21-.36-3.21-.58A8.79,8.79,0,0,1,27.5,3.64Zm-.35-.1a10.15,10.15,0,0,0-3.53,2.2A24.13,24.13,0,0,1,21.16,5,16.41,16.41,0,0,1,27,3.51Zm-6.5,1.29-.39-.18a2.55,2.55,0,0,1-.74-.48,22.22,22.22,0,0,1,6-.83c.32,0,.65,0,1,0A17.56,17.56,0,0,0,20.65,4.83Zm-1.23-1c0-.07.15-.18.46-.29a19.11,19.11,0,0,1,4.2-.47c.56,0,1.12,0,1.69.07h-.52a22.23,22.23,0,0,0-5.85.78A.29.29,0,0,1,19.42,3.84Zm-1.08.7a2.71,2.71,0,0,0,.93.64l.32.15a22.69,22.69,0,0,0-5.4,3.88c-.25-.11-.49-.21-.71-.32a4.1,4.1,0,0,1-1.44-1A22.47,22.47,0,0,1,18.34,4.54Zm-7.25,4.1a4.3,4.3,0,0,0,1.57,1.1c.21.11.45.21.7.32a26.27,26.27,0,0,0-4.09,5.75l-.93-.42A5.27,5.27,0,0,1,6.42,14,22.86,22.86,0,0,1,11.09,8.64ZM5.73,31.9a5.27,5.27,0,0,1-2-1.39,21.22,21.22,0,0,1-.5-7.15,6.6,6.6,0,0,0,2.07,1.41l1,.47a23.73,23.73,0,0,0,.24,7.06ZM6.55,24c-.36-.15-.69-.31-1-.46A5.52,5.52,0,0,1,3.44,22,21.69,21.69,0,0,1,5.8,15.11a5.76,5.76,0,0,0,2,1.37l1,.43A26.27,26.27,0,0,0,6.55,24Zm.76,1.64a55.59,55.59,0,0,0,6.8,2,39,39,0,0,0-.28,6.92,52.28,52.28,0,0,1-6.31-1.86A24.34,24.34,0,0,1,7.31,25.61Zm.45,8.2a53.4,53.4,0,0,0,6.15,1.8A22.74,22.74,0,0,0,15,41a40.1,40.1,0,0,1-4.88-1.44A18.92,18.92,0,0,1,7.76,33.81Zm7.08,10.54a14.63,14.63,0,0,1-4.07-3.83,41.09,41.09,0,0,0,4.56,1.32,9.66,9.66,0,0,0,2.13,3.3A23,23,0,0,1,14.84,44.35ZM21.91,46c-1.25-.18-2.51-.4-3.64-.65a8.63,8.63,0,0,1-1.94-3.26c1.85.41,3.91.77,6,1.07C22.11,44.39,22,45.36,21.91,46Zm.47-3.61c-2.18-.31-4.36-.7-6.33-1.14a23.55,23.55,0,0,1-.9-5.34c2.46.54,5.2,1,7.92,1.42C22.8,39.26,22.57,41,22.38,42.37Zm4,4.05c-1.18-.06-2.45-.17-3.76-.34a26.78,26.78,0,0,0,.72-2.8c2.13.28,4.19.47,6.15.56A9.17,9.17,0,0,1,26.41,46.42Zm3.44-.06a18.28,18.28,0,0,1-2,.1h-.57a10.42,10.42,0,0,0,3.27-2.56l1.5,0a28.51,28.51,0,0,0,3-.13A15.78,15.78,0,0,1,29.85,46.36ZM36,43a29.42,29.42,0,0,1-3.36.16c-.46,0-.94,0-1.45,0A21.19,21.19,0,0,0,34,38.3l2,0a37.25,37.25,0,0,0,4.11-.2A19.25,19.25,0,0,1,36,43Zm4.6-5.93a37.68,37.68,0,0,1-4.29.21l-1.94,0a35.12,35.12,0,0,0,1.73-6.72c.74,0,1.46,0,2.13,0a40,40,0,0,0,4.58-.23A23.15,23.15,0,0,1,40.59,37.09Zm2.4-8a40.42,40.42,0,0,1-4.61.23l-2.11,0a41.66,41.66,0,0,0,.28-7.4l2,0a37.87,37.87,0,0,0,4.3-.21A26.46,26.46,0,0,1,43,29.09ZM40.93,13.75A4.06,4.06,0,0,0,43,13a22.51,22.51,0,0,1,3,6.43,4.68,4.68,0,0,1-2.6,1A25.36,25.36,0,0,0,40.93,13.75ZM46.7,27.9A5.08,5.08,0,0,1,43.87,29a25.73,25.73,0,0,0-.2-7.38,5.34,5.34,0,0,0,2.66-.95A21.61,21.61,0,0,1,46.7,27.9Z" />
                    </g>
                </svg>
                <div>
                    <p>{{ arrayhaskeythenreturnitsvalue($field_data,'bc-email') }}</p>

                </div>
            </div>
            <div>
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                    style="enable-background:new 0 0 512 512;" xml:space="preserve">
                    <path d="M256,0C161.896,0,85.333,76.563,85.333,170.667c0,28.25,7.063,56.26,20.49,81.104L246.667,506.5
                                  c1.875,3.396,5.448,5.5,9.333,5.5s7.458-2.104,9.333-5.5l140.896-254.813c13.375-24.76,20.438-52.771,20.438-81.021
                                  C426.667,76.563,350.104,0,256,0z M256,256c-47.052,0-85.333-38.281-85.333-85.333c0-47.052,38.281-85.333,85.333-85.333
                                  s85.333,38.281,85.333,85.333C341.333,217.719,303.052,256,256,256z" />
                </svg>
                <div>
                    <p>{{arrayhaskeythenreturnitsvalue( $field_data,'bc-address') }}</p>

                </div>
            </div>
        </div>
    </div>

</div>
