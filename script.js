/*Search bar code for functionality*/

<script type="text/javascript">
document.getElementById('searchform').onsubmit = function() {
    window.location = 'http://www.google.com/search?q=site:sitepagenameenteredhere' + document.getElementById('test').value;
    return false;
}
</script>