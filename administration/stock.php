
<!DOCTYPE html>
<html>
    <head>
        <title>Gestion de stocks</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans|Montserrat:700' rel='stylesheet' type='text/css'>
         <link rel="icon" href="favicon.ico" type="image/x-icon">
        <style>
            html, body {
                overflow: hidden;
                margin: 0;
            }
            body {
                font-family: 'Open Sans', 'Helvetica Neue', 'Hiragino Sans GB', 'LiHei Pro', Arial, sans-serif;
                color: #333;
            }
            #wrapper {
                position: absolute;
                left: 0;
                width: 600px;
                text-align: center;
                top: 50%;
                left: 50%;
                margin-left: -300px;
                margin-top: -160px;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none;
            }
            h1 {
                font-family: 'Montserrat', 'Helvetica Neue', Arial, sans-serif;
                font-weight: 700;
                font-size: 30px;
                letter-spacing: 9px;
                text-transform: uppercase;
                margin: 12px 0;
                left: 4px;
            }
            h2 {
                color: #999;
                font-weight: normal;
                font-size: 15px;
                letter-spacing: .12em;
                margin-bottom: 30px;
                left: 3px;
            }
            h1, h2 {
                position: relative;
            }
            p {
                font-size: 14px;
                line-height: 2em;
                margin: 0;
                letter-spacing: 2px;
            }
            canvas {
                position: absolute;
                top: 0;
                left: 0;
                z-index: 0;
                width: 100%;
                height: 100%;
                pointer-events: none;
            }
            a {
                color: #999;
                text-decoration: none;
                transition: color .2s ease;
            }
            a:hover {
                color: #f33;
            }
        </style>
    </head>
    <body>
        <div id="wrapper">
            <h1>Dinegamer OOPS</h1>
            <h2>Un seul souci, Manque d'inspirations :)</h2>
            <h2>Amusez-vous a cliquer sur la partie blanche pour defiler la bande</h2>
            
            <p>
                <img src="images/oops.jpeg" alt="oops" id="oops">
            	Page Web en reconstruction... <br>
                    Pour toute suggestion contactez: 
                    <a href="teenagerdine@gmail.com">teenagerdine@gmail.com</a><br>!
                    ou <a href="chamsoudinethienta@hotmail.com">chamsoudinethienta@hotmail.com</a>
                     || ou composez le 
                    <strong>73 44 92 30</strong>
                </p>
        </div>
        <canvas></canvas>
        <script>
            document.addEventListener('touchmove', function (e) {
                e.preventDefault()
            })
            var c = document.getElementsByTagName('canvas')[0],
                x = c.getContext('2d'),
                pr = window.devicePixelRatio || 1,
                w = window.innerWidth,
                h = window.innerHeight,
                f = 90,
                q,
                m = Math,
                r = 0,
                u = m.PI*2,
                v = m.cos,
                z = m.random
            c.width = w*pr
            c.height = h*pr
            x.scale(pr, pr)
            x.globalAlpha = 0.6
            function i(){
                x.clearRect(0,0,w,h)
                q=[{x:0,y:h*.7+f},{x:0,y:h*.7-f}]
                while(q[1].x<w+f) d(q[0], q[1])
            }
            function d(i,j){
                x.beginPath()
                x.moveTo(i.x, i.y)
                x.lineTo(j.x, j.y)
                var k = j.x + (z()*2-0.25)*f,
                    n = y(j.y)
                x.lineTo(k, n)
                x.closePath()
                r-=u/-50
                x.fillStyle = '#'+(v(r)*127+128<<16 | v(r+u/3)*127+128<<8 | v(r+u/3*2)*127+128).toString(16)
                x.fill()
                q[0] = q[1]
                q[1] = {x:k,y:n}
            }
            function y(p){
                var t = p + (z()*2-1.1)*f
                return (t>h||t<0) ? y(p) : t
            }
            document.onclick = i
            document.ontouchstart = i
            i()
        </script>
    </body>
</html>