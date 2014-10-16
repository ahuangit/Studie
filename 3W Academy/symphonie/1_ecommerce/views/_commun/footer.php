<!-- /.container -->

<div class="container">

    <hr>

    <footer>
        <div class="row">
            <div class="col-lg-12">
                <p>Copyright &copy; Company 2013 - Template by <a href="http://maxoffsky.com/">Maks</a>
                </p>
            </div>
        </div>
    </footer>

</div>
<!-- /.container -->

<!-- JavaScript -->
<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/lib/jquery.raty.js"> </script>



<script type="text/javascript">
    $(document).ready(function()
    {
        $("#formcom").hide();
        $("#displayFormCom").click(function(e)
        {
            e.preventDefault();
            $("#formcom").slideToggle();
        });
        $('#star').raty(
            {
                path:"js/lib/images",
                scoreName: 'note'
            })
        $("#star input").val (0);

    })

</script>

</body>
</html
