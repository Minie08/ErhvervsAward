<script>
    (function(d) {
        var config = {
                kitId: 'eaj3zwt',
                scriptTimeout: 3000,
                async: true
            },
            h=d.documentElement,
            t=setTimeout(function(){
                h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";
                },config.scriptTimeout),
            tk=d.createElement("script"),
            f=false,
            s=d.getElementsByTagName("script")[0],
            a;
        h.className+=" wf-loading";
        tk.src='https://use.typekit.net/'+config.kitId+'.js';
        tk.async=true;
        tk.onload=tk.onreadystatechange=function(){
            a=this.readyState;
            if(f||a&&a!="complete"&&a!="loaded")return;
            f=true;clearTimeout(t);
            try{
                Typekit.load(config)
            }catch(e){}
        };
        s.parentNode.insertBefore(tk,s)
    })(document);
</script>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hahmlet:wght@100..900&display=swap" rel="stylesheet">

<script src="https://kit.fontawesome.com/c32d07d51f.js" crossorigin="anonymous"></script>