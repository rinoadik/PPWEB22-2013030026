<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>UAS - Rino Adi K - 2013030026 - 2A Sistem Informasi</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
        <script src="jquery.PrintArea.js"></script>
        
    </head>
    <body>
        <div class="container">
            <br />
            <?php include 'header.php'; ?>
            <h2 align="center">DATA ITEM</h2><br/>
           
        <a href="index.php"> <button class="btn btn-danger">Kembali</button></a>
        <input type="hidden" name="id" id="id" />
            <div style="clear:both"></div>
            <br />
            
            <div class="table-responsive" >
                <table class="table table-striped table-bordered">
                   <thead >
                         <tr>
                          <th >id</th>
                            <th>barcode</th>
                            <th>nama</th>
                            <th>satuan</th>
                            <th>harga</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                    
                </table>
            </div>

            
            <br />
            <br />
            <br />
           

<script>
</script>

<script>
$(document).ready(function(){
    load_data();
    function load_data(query='')
    {
        $.ajax({
            url:("fetch.php"),
            method:"POST",
            data:{query:query},
            success:function(data)
            {
                $("#cetak").bind("click", function(event) {
                        
                        $('.table-responsive').printArea();
                    })
                $('tbody').html(data);
            }
        })
    }


    $('#multi_search_filter').change(function(){
        $('#id').val($('#multi_search_filter').val());
        var query = $('#id').val();
        load_data(query);
    });
    
});
</script>

</body>
</html>