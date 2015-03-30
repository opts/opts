<?php
echo  <<<MYCFG
<script type="text/x-mathjax-config">
MathJax.Hub.Config({
    messageStyle: "none",
    showMathMenu: true,
    showMathMenuMSIE: true,
    "HTML-CSS": {
        scale: 100
    },
    "SVG": {
        scale: 150
    },
    menuSettings: {
        zoom: "Hover",
        delay: 50
    },
    errorSettings: {
        message: [""]
    },
    MathMenu: {
        showFontMenu: true,
        helpURL: "mailto:gene0mega@zoho.com"
    }
});
</script>

MYCFG;
?>
