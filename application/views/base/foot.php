<script src="<?= base_assets() ?>js/jquery.min.js"></script>
<script src="<?= base_assets() ?>js/bootstrap.min.js"></script>
<script type="text/javascript">

    var id = null;
    var setId = function(oid){
        id = oid;
    }
    var apaga = function(){
            var pathname = window.location.pathname; // Returns path only
            var res = pathname.split("/");
            var str = "/" + res[1] + "/" + res[2];
            var url = "http://" + window.location.hostname + str + "/delete/" + id;
            //alert(url);
            window.location.href = url;
            //window.location.reload();
        };
</script>
</body>
</html>