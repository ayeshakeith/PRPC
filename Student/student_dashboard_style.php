<style>
            .grid-container {
            display: grid;
            grid-template-columns: auto auto auto auto;
            padding: 0px;
            }
            .grid-container1 {
            display: grid;
            grid-template-columns: auto auto auto auto auto;
            padding: 0px;
            }
            .grid-item {
            border: 0px;
            padding: 0px;
            text-align: center;
            }
            .grid-item1 {
            background-color: rgba(255, 255, 255, 0.8);
            border: 1px solid rgba(0, 0, 0, 0.8);
            padding: 20px;
            }
            .container1 {
              text-align: center;
              color: white;
            }
            .centered {
              position: absolute;
              top: 50%;
              left: 50%;
              transform: translate(-50%, -50%);
            }

            :root {
            --underline-intrinsic-width: 8;
            --underline-width: 12;
            --underline-color: #f1a1e3;
            --underline-cap-width: 4px;
            --underline-offset-y: -12px;
            --underline-padding-x: 0.12em;
            --cap-image-left: url(https://files-d4s40otz1.now.sh/left.svg);
            --cap-image-right: url(https://files-4vvqilj8v.now.sh/right.svg);
            }
  
            .heading {
            display: inline;
            --underline-width-scale: calc(var(--underline-width) / var(--underline-intrinsic-width));
            padding: 0 calc(var(--underline-padding-x) + calc(var(--underline-cap-width) * var(--underline-width-scale)));
            box-decoration-break: clone;
            background-repeat: no-repeat;
            color: black;
            font-size: 50px;
            background-image:
                linear-gradient(180deg, var(--underline-color), var(--underline-color)),
                var(--cap-image-left),
                var(--cap-image-right);
            background-position-x:
                calc(var(--underline-cap-width) * var(--underline-width-scale)),
                0,
                100%;
            background-position-y: calc(100% - var(--underline-offset-y) * -1);
            background-size:
                calc(100% - calc(var(--underline-cap-width) * var(--underline-width-scale) * 2)) calc(var(--underline-width) * 1px),
                auto calc(var(--underline-width) * 1px),
                auto calc(var(--underline-width) * 1px);
            }

</style>