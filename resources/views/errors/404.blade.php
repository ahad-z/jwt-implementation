<html>
<style type="text/css">
  /* --------------------------
  Base
--------------------------- */

body {
  background: #faefeb;
  height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
}

svg {
  margin: auto;
  display: block;
  height: 245px;
  width: 315px;
}

/* --------------------------
  Keyframes
--------------------------- */

@-webkit-keyframes movement {
  0% {
    -webkit-transform: translate(0px, 0px);
    transform: translate(0px, 0px);
  }
  15% {
    -webkit-transform: translate(0px, 0px);
    transform: translate(0px, 0px);
  }
  25% {
    -webkit-transform: translate(0px, 6px);
    transform: translate(0px, 6px);
  }
  35% {
    -webkit-transform: translate(0px, 6px);
    transform: translate(0px, 6px);
  }
  45% {
    -webkit-transform: translate(0px, 0px);
    transform: translate(0px, 0px);
  }
  70% {
    -webkit-transform: translate(0px, 0px);
    transform: translate(0px, 0px);
  }
  80% {
    -webkit-transform: translate(7px, 6px);
    transform: translate(7px, 6px);
  }
  90% {
    -webkit-transform: translate(7px, 6px);
    transform: translate(7px, 6px);
  }
  100% {
    -webkit-transform: translate(0px, 0px);
    transform: translate(0px, 0px);
  }
}

@-webkit-keyframes mouth {
  0% {
    -webkit-transform: scale(1);
    transform: scale(1);
  }
  15% {
    -webkit-transform: scale(1);
    transform: scale(1);
  }
  25% {
    -webkit-transform: scale(1, 0.2);
    transform: scale(1, 0.2);
    -webkit-transform: translate(0px, 8px);
    transform: translate(0px, 8px);
  }
  35% {
    -webkit-transform: scale(1, 0.2);
    transform: scale(1, 0.2);
    -webkit-transform: translate(0px, 8px);
    transform: translate(0px, 8px);
  }
  45% {
    -webkit-transform: scale(1);
    transform: scale(1);
  }
  70% {
    -webkit-transform: scale(1);
    transform: scale(1);
  }
  80% {
    -webkit-transform: scale(1, 0.2);
    transform: scale(1, 0.2);
    -webkit-transform: translate(7px, 4px);
    transform: translate(7px, 4px);
  }
  90% {
    -webkit-transform: scale(1, 0.2);
    transform: scale(1, 0.2);
    -webkit-transform: translate(7px, 4px);
    transform: translate(7px, 4px);
  }
  100% {
    -webkit-transform: scale(1);
    transform: scale(1);
  }
}

@-webkit-keyframes eyebrown {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
    -webkit-transform: translate(0px, -2px);
    transform: translate(0px, -2px);
  }
  15% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
    -webkit-transform: translate(0px, -2px);
    transform: translate(0px, -2px);
  }
  25% {
    -webkit-transform: rotate(-4deg);
    transform: rotate(-4deg);
    -webkit-transform: translate(0px, -3px);
    transform: translate(0px, -3px);
  }
  35% {
    -webkit-transform: rotate(-4deg);
    transform: rotate(-4deg);
    -webkit-transform: translate(0px, -3px);
    transform: translate(0px, -3px);
  }
  45% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
    -webkit-transform: translate(0px, -2px);
    transform: translate(0px, -2px);
  }
  70% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
    -webkit-transform: translate(0px, -2px);
    transform: translate(0px, -2px);
  }
  80% {
    -webkit-transform: rotate(3deg);
    transform: rotate(3deg);
    -webkit-transform: translate(7px, -3px);
    transform: translate(7px, -3px);
  }
  90% {
    -webkit-transform: rotate(3deg);
    transform: rotate(3deg);
    -webkit-transform: translate(7px, -2px);
    transform: translate(7px, -2px);
  }
  100% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
    -webkit-transform: translate(0px, -2px);
    transform: translate(0px, -2px);
  }
}

@-webkit-keyframes noise-1 {
  0%,
  20%,
  40%,
  60%,
  70%,
  90% {
    opacity: 0;
  }
  10% {
    opacity: 0.1;
  }
  50% {
    opacity: 0.5;
    left: -6px;
  }
  80% {
    opacity: 0.3;
  }
  100% {
    opacity: 0.6;
    left: 2px;
  }
}

@keyframes noise-1 {
  0%,
  20%,
  40%,
  60%,
  70%,
  90% {
    opacity: 0;
  }
  10% {
    opacity: 0.1;
  }
  50% {
    opacity: 0.5;
    left: -6px;
  }
  80% {
    opacity: 0.3;
  }
  100% {
    opacity: 0.6;
    left: 2px;
  }
}

@-webkit-keyframes noise-2 {
  0%,
  20%,
  40%,
  60%,
  70%,
  90% {
    opacity: 0;
  }
  10% {
    opacity: 0.1;
  }
  50% {
    opacity: 0.5;
    left: 6px;
  }
  80% {
    opacity: 0.3;
  }
  100% {
    opacity: 0.6;
    left: -2px;
  }
}

@keyframes noise-2 {
  0%,
  20%,
  40%,
  60%,
  70%,
  90% {
    opacity: 0;
  }
  10% {
    opacity: 0.1;
  }
  50% {
    opacity: 0.5;
    left: 6px;
  }
  80% {
    opacity: 0.3;
  }
  100% {
    opacity: 0.6;
    left: -2px;
  }
}

@-webkit-keyframes noise {
  0%,
  3%,
  5%,
  42%,
  44%,
  100% {
    opacity: 1;
    -webkit-transform: scaleY(1);
    transform: scaleY(1);
  }
  4.3% {
    opacity: 1;
    -webkit-transform: scaleY(1.7);
    transform: scaleY(1.7);
  }
  43% {
    opacity: 1;
    -webkit-transform: scaleX(1.5);
    transform: scaleX(1.5);
  }
}

@keyframes noise {
  0%,
  3%,
  5%,
  42%,
  44%,
  100% {
    opacity: 1;
    -webkit-transform: scaleY(1);
    transform: scaleY(1);
  }
  4.3% {
    opacity: 1;
    -webkit-transform: scaleY(1.7);
    transform: scaleY(1.7);
  }
  43% {
    opacity: 1;
    -webkit-transform: scaleX(1.5);
    transform: scaleX(1.5);
  }
}

/* --------------------------
  SVG Styles
--------------------------- */

#404animation {
  -webkit-transform-origin: 50% 50%;
  transform-origin: 50% 50%;
  transform-box: fill-box;
}

.movement {
  -webkit-animation: movement;
  animation: movement;
}

.mouth {
  -webkit-animation: mouth;
  animation: mouth;
}

.eyebrown {
  -webkit-animation: eyebrown;
  animation: eyebrown;
}

.error {
  animation: noise 2s;

  &::after {
    animation: noise-1;
  }

  &::before {
    animation: noise-2;
  }
}

.movement,
.mouth,
.shadow,
.eyebrown {
  -webkit-animation-iteration-count: infinite;
  animation-iteration-count: infinite;
  -webkit-animation-duration: 5s;
  animation-duration: 5s;
}

.error,
.error:after,
.error:before {
  -webkit-animation-timing-function: linear;
  animation-timing-function: linear;
  -webkit-animation-iteration-count: infinite;
  animation-iteration-count: infinite;
}

.error:after,
.error:before {
  -webkit-animation-duration: 0.2s;
  animation-duration: 0.2s;
}

/* --------------------------
  Dribbble
--------------------------- */

.dribbble {
  position: fixed;
  display: block;
  right: 30px;
  bottom: 30px;
  svg {
    width: 30px;
    height: 30px;
  }
}

</style>
  <body>
    <div>
      <svg
      id="404animation"
      xmlns="http://www.w3.org/2000/svg"
      xmlns:xlink="http://www.w3.org/1999/xlink"
      viewBox="0 0 315 245"
    >
      <defs>
        <style>
          .a {
            opacity: 1;
            fill: url(#a);
          }
          .a,
          .d {
            isolation: isolate;
          }
          .b {
            filter: url(#b);
          }
          .c {
            fill: #fff;
          }
          .d {
            opacity: 0.49;
            fill: url(#c);
          }
          .e {
            fill: #FDD6D0;
          }
          .f {
            fill: #272641;
          }
          .g {
            fill: url(#d);
          }
        </style>

        <linearGradient
          id="a"
          x1="-138.69"
          y1="541.87"
          x2="-139.39"
          y2="542.58"
          gradientTransform="matrix(232, 0, 0, -231.11, 32420, 125412.22)"
          gradientUnits="userSpaceOnUse"
        >
          <stop offset="0" stop-color="#FAEFEB" stop-opacity="0" />
          <stop offset="1" stop-color="#F3A599" />
        </linearGradient>
        <filter
          id="b"
          x="-7.6"
          y="-6.3"
          width="125.2"
          height="125.2"
          name="filter-3"
        >
          <feOffset
            result="shadowOffsetOuter1"
            dx="8"
            dy="10"
            in="SourceAlpha"
          />
          <feGaussianBlur
            result="shadowBlurOuter1"
            stdDeviation="5"
            in="shadowOffsetOuter1"
          />
          <feColorMatrix
            values="0 0 0 0 0.23 0 0 0 0 0.37 0 0 0 0 0.48 0 0 0 0 0"
            in="shadowBlurOuter1"
          />
        </filter>
        <linearGradient
          id="c"
          x1="-138.4"
          y1="541"
          x2="-138.5"
          y2="541.29"
          gradientTransform="matrix(137.8, 0, 0, -138.72, 19240.17, 75159.28)"
          gradientUnits="userSpaceOnUse"
        >
          <stop offset="0" stop-color="#e3e3e3" stop-opacity="0" />
          <stop offset="1" stop-color="#F3A599" />
        </linearGradient>
        <linearGradient
          id="d"
          x1="-136.48"
          y1="530.56"
          x2="-136.41"
          y2="529.23"
          gradientTransform="matrix(46.14, 0, 0, -22.35, 6389.25, 11953.24)"
          gradientUnits="userSpaceOnUse"
        >
          <stop offset="0" stop-color="#FAEFEB" />
          <stop offset="1" stop-color="#F6D0CA" />
        </linearGradient>
      </defs>

      <title>error404</title>

      <path
        class="a"
        d="M81.44,10h153a1.43,1.43,0,0,1,1.16.58l76.15,101.5a1.42,1.42,0,0,1,.29.86V241.11H148.18L80.29,151.53a1.44,1.44,0,0,1-.29-.87V11.44A1.45,1.45,0,0,1,81.44,10Z"
      />

      <g class="b">
        <rect x="77.66" width="158.72" height="158.95" rx="13" ry="13" />
      </g>

      <rect
        class="c"
        x="77.66"
        width="158.72"
        height="158.95"
        rx="13"
        ry="13"
      />

      <path
        class="d"
        d="M89.92,10.84H224.83a1.44,1.44,0,0,1,1.45,1.44V148.11a1.44,1.44,0,0,1-1.45,1.44H89.92a1.44,1.44,0,0,1-1.44-1.44V12.28A1.44,1.44,0,0,1,89.92,10.84Z"
      />

      <path
        class="e"
        d="M87.76,10.11H227V114.92l-2.87-5.08L221.49,119l-4.18-4.5-3.62,1.84L203,114.53l-2,35-4.59.08-3.34-1.19-6.65,1.11-4.6-1.88-6.93,1.88-3.61-43.35-3.84,43.35-5.84-1.15-5.41,1.71-7.09-2-10.89,1.44-3.2-2.21-3.43,2.21H124V53.46q-2.9,41.89-8.34,52.74c-2.33,4.63-6.08,5.89-8.54,7-3.29,1.44-5.77,1.75-14,1.75q-14.31,0-19.25-15.2,5.52-3.84,9-11.68t4.86-34.58Z"
      />

      <g class="eye movement">
        <path
          class="f"
          d="M142.82,47.56A7.82,7.82,0,1,1,135,39.74,7.82,7.82,0,0,1,142.82,47.56Zm42.67-7.82a7.82,7.82,0,1,1-7.82,7.82A7.83,7.83,0,0,1,185.49,39.74Z"
        />

        <path
          class="c"
          d="M135.22,49.9a2.12,2.12,0,1,1,2.11-2.12A2.11,2.11,0,0,1,135.22,49.9Zm50.45,0a2.12,2.12,0,1,1,2.11-2.12A2.12,2.12,0,0,1,185.67,49.9Z"
        />
      </g>

      <path
        class="f movement mouth"
        d="M180.91,76.75a36.51,36.51,0,0,0-44,0,2.2,2.2,0,0,0-.5,2.86,1.75,1.75,0,0,0,2.58.55,33.07,33.07,0,0,1,39.86,0,1.71,1.71,0,0,0,1,.35,1.81,1.81,0,0,0,1.55-.9A2.2,2.2,0,0,0,180.91,76.75Z"
      />

      <path
        class="f eyebrown"
        d="M136.07,26.71a13,13,0,0,1-13,13,1.78,1.78,0,0,1,0-3.56,9.49,9.49,0,0,0,9.48-9.47,1.78,1.78,0,0,1,3.56,0Zm60.44,9.47a1.78,1.78,0,0,1,0,3.56,13,13,0,0,1-13-13,1.78,1.78,0,1,1,3.56,0A9.49,9.49,0,0,0,196.51,36.18Z"
      />

      <path
        class="g"
        d="M69.68,93.6h37q2.79,14.07,9.11,12.44c-2.74,5.58-8.45,9.92-20.59,9.92s-17.17-4.65-20.18-7.89Q72.05,104.82,69.68,93.6Z"
      />

      <path
        class="c error"
        d="M38.1,109V93.2H2.3L-.3,82.3,39.8,35.7h13v45h9.9V93.2H52.8V109ZM17.8,80.7H38.1V56.8Z"
      />

      <path
        class="c error"
        d="M288.1,109V93.2H252.3l-2.6-10.9,40.1-46.6h13v45h9.9V93.2h-9.9V109ZM267.8,80.7h20.3V56.8Z"
        />
      </svg>
      
    <!-- dribbble -->
    <a class="dribbble" href="https://dribbble.com/danarocha" target="_blank">
      <svg
        width="30px"
        height="30px"
        viewBox="0 0 100 100"
        version="1.1"
        xmlns="http://www.w3.org/2000/svg"
        xmlns:xlink="http://www.w3.org/1999/xlink"
      >
        <g
          id="🖥️-DESKTOP"
          stroke="none"
          stroke-width="1"
          fill="none"
          fill-rule="evenodd"
        >
          <g
            id="WEB"
            transform="translate(-993.000000, -978.000000)"
            fill="#2D3D94"
          >
            <g
              id="dribbble-ball-mark"
              transform="translate(993.000000, 978.000000)"
            >
              <path
                d="M50,0 C22.397,0 0,22.397 0,50 C0,77.603 22.397,100 50,100 C77.5488,100 100,77.603 100,50 C100,22.397 77.5488,0 50,0 Z M83.026,23.0477 C88.9913,30.3145 92.5705,39.5879 92.679,49.6204 C91.269,49.3492 77.1692,46.4751 62.961,48.2646 C62.6356,47.5597 62.3644,46.8004 62.0391,46.0412 C61.1714,43.9805 60.1952,41.8655 59.2191,39.859 C74.9458,33.4599 82.1041,24.2408 83.026,23.0477 Z M50,7.37527 C60.846,7.37527 70.7701,11.4425 78.308,18.1128 C77.5488,19.1974 71.0954,27.82 55.9111,33.5141 C48.9154,20.6616 41.1605,10.141 39.9675,8.5141 C43.167,7.75488 46.5293,7.37527 50,7.37527 Z M31.833,11.3883 C32.9718,12.9067 40.564,23.4816 47.6681,36.0629 C27.7115,41.3774 10.0868,41.2691665 8.18872,41.2691665 C10.9544,28.0369 19.9024,17.0282 31.833,11.3883 Z M7.26681,50.0542 C7.26681,49.6204 7.26681,49.1866 7.26681,48.7527 C9.11063,48.8069 29.8265,49.0781 51.1388,42.679 C52.3861,45.0651 53.5249,47.5054 54.6095,49.9458 C54.0672,50.1085 53.4707,50.2712 52.9284,50.4338 C30.9111,57.538 19.1974,76.9523 18.2213,78.5792 C11.4425,71.0412 7.26681,61.0087 7.26681,50.0542 Z M50,92.7332 C40.1302,92.7332 31.0195,89.3709 23.8069,83.731 C24.5662,82.1584 33.243,65.4555 57.321,57.0499 C57.4295,56.9957 57.4837,56.9957 57.5922,56.9414 C63.6117,72.5054 66.0521,85.5748 66.7028,89.3167 C61.551,91.5401 55.9111,92.7332 50,92.7332 Z M73.807,85.4122 C73.3731,82.8091 71.0955,70.3362 65.5098,54.9892 C78.9046,52.8742 90.6182,56.3449 92.0824,56.833 C90.2386,68.7093 83.4056,78.9588 73.807,85.4122 Z"
                id="Shape"
              ></path>
            </g>
          </g>
        </g>
      </svg>
    </a>
      
    </div>
    
  </body>
</html>
