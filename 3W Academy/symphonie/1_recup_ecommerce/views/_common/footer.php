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
    <?php if ($object == 'produit'):  ?>
        <script src="js/lib/jquery.raty.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $('.raty').raty({ path: 'js/lib/images' });
                $('.raty input').val(0)

                if ($('#addcommentaire').length > 0)
                {
                    $('#addcommentaire').hide();
                    $('#btnleavemessage').click(function(e)
                    {
                        e.preventDefault();
                        $('#addcommentaire').slideDown();
                    })
                }

            });
        </script>
    <?php endif; ?>

</body>

</html>