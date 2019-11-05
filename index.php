<?php 
    $page_title = 'Homepage';
    include_once'includes/header.php';
    include_once'config/Session.php';    
?>

<div class="jumbotron">
	<div class="container text-center">
		<?php 
            if(!isset($_SESSION['username'])):
        ?>
        <h1>Ebay product HTML generator</h1>
        <p>Please login to see product list</p>
        <div id="loreg">
            <ul class="list-inline">
                <li>
                    <a class="btn btn-primary btn-lg" href="login.php">Login</a>
                </li>
                <?php if(REGISTRATION_ACTIVE): ?>
                <li>
                    <a class="btn btn-primary btn-lg" href="register.php">Register</a>
                </li>
                <?php endif; ?>
            </ul>
        </div>
        <?php else: ?>
        <h1>Ebay product HTML generator</h1>
        <p>Product list</p>
<!-- Table Markup -->
<table id="showcase-example-1" class="table" data-paging="true" data-filtering="true" data-sorting="true" data-editing="true" data-state="true" data-show-toggle="true"  data-expand-first="true" data-toggle-column="last"></table>

<!-- Editing Modal Markup -->
<div class="modal fade" id="editor-modal" tabindex="-1" role="dialog" aria-labelledby="editor-title">
    <style scoped>
        /* provides a red astrix to denote required fields - this should be included in common stylesheet */
        .form-group.required .control-label:after {
            content:"*";
            color:red;
            margin-left: 4px;
        }
    </style>
    <div class="modal-dialog" role="document">
        <form class="modal-content form-horizontal" id="editor">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="editor-title">Add Row</h4>
            </div>
            <div class="modal-body">
                <input type="number" id="id" name="id" class="hidden"/>
                <div class="form-group">
                    <label for="active" class="col-sm-3 control-label">Active</label>
                    <div class="col-sm-9">
                        <select class="form-control" id="active" name="active">
                            <option value="1">True</option>
                            <option value="0">False</option>
                        </select>
                    </div>
                </div>
                <div class="form-group required">
                    <label for="title" class="col-sm-3 control-label">Title</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="title" name="title" placeholder="Title" required>
                    </div>
                </div>
                <div class="form-group required">
                    <label for="price" class="col-sm-3 control-label">Price</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="price" name="price" placeholder="Price" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="price_discount" class="col-sm-3 control-label">Price Discount</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="price_discount" name="price_discount" placeholder="Price Discount">
                    </div>
                </div>
                <div class="form-group required">
                    <label for="description_short" class="col-sm-3 control-label">Description Short</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="description_short" name="description_short" placeholder="Description Short" required>
                    </div>
                </div>
                <div class="form-group required">
                    <label for="description_long" class="col-sm-3 control-label">Description Long</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="description_long" name="description_long" placeholder="Description Long" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="logo_url" class="col-sm-3 control-label">Logo URL</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="logo_url" name="logo_url" placeholder="Logo URL">
                    </div>
                </div>
<!--                 <div class="form-group">
                    <label for="created" class="col-sm-3 control-label">Date of Birth</label>
                    <div class="col-sm-9">
                        <input type="date" class="form-control" id="dob" name="created" placeholder="Date of Birth">
                    </div>
                </div> -->
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save changes</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </form>
    </div>
</div>
        <div id="usr">
            <p>
                You're logged in as <?php if(isset($_SESSION['username'])) echo $_SESSION['username']; ?> <a href="logout.php">Logout</a>
            </p>
        </div>
        <?php endif; ?>
        </div>
   
	</div>
</div>
<?php include_once'includes/footer.php'; ?>
<script type="text/javascript">

jQuery(function($){
    var $modal = $('#editor-modal'),
        $editor = $('#editor'),
        $editorTitle = $('#editor-title'),
        ft = FooTable.init('#showcase-example-1', {
            "showToggle": true,
            columns: [
            {"name":"id","title":"id","type":"number","style":{"width":30,"maxWidth":30}},
            {"name":"active","title":"active","type":"number","style":{"width":40,"maxWidth":40}},
            {"name":"title","title":"Title","style":{"maxWidth":180,"overflow":"hidden","textOverflow":"ellipsis","wordBreak":"keep-all","whiteSpace":"nowrap"}},
            {"name":"price","title":"Price","type":"number","breakpoints":"xs sm","style":{"width":40,"maxWidth":40}},
            {"name":"price_discount","title":"Discount","type":"number","breakpoints":"xs sm","style":{"width":60,"maxWidth":60}},
            {"name":"description_short","title":"Description short","breakpoints":"xs sm","style":{"maxWidth":200,"overflow":"hidden","textOverflow":"ellipsis","wordBreak":"keep-all","whiteSpace":"nowrap"}},
            {"name":"description_long","title":"Description long","breakpoints":"xs sm","style":{"maxWidth":200,"overflow":"hidden","textOverflow":"ellipsis","wordBreak":"keep-all","whiteSpace":"nowrap"}},
            {"name":"logo_url","title":"logo URL","breakpoints":"xs sm","style":{"maxWidth":200,"overflow":"hidden","textOverflow":"ellipsis","wordBreak":"keep-all","whiteSpace":"nowrap"}},
            {"name":"created","title":"Created","type":"date","breakpoints":"xs sm","style":{"maxWidth":200,"overflow":"hidden","textOverflow":"ellipsis","wordBreak":"keep-all","whiteSpace":"nowrap"},"formatString":"YYYY-MM-DD HH:mm:ss"},
        ],
            // rows: $.get("https://fooplugins.github.io/FooTable/docs/content/rows.json"),
            rows: <?php require_once('controllers/ParseProducts.php'); ?>,
            editing: {
                addRow: function(){
                    $modal.removeData('row');
                    $editor[0].reset();
                    $editorTitle.text('Add a new row');
                    $modal.modal('show');
                },
                editRow: function(row){
                    var values = row.val();
                    $editor.find('#id').val(values.id);
                    $editor.find('#active').val(values.active);
                    $editor.find('#title').val(values.title);
                    $editor.find('#price').val(values.price);
                    $editor.find('#price_discount').val(values.price_discount);
                    $editor.find('#description_short').val(values.description_short);
                    $editor.find('#description_long').val(values.description_long);
                    $editor.find('#logo_url').val(values.logo_url);
                    $editor.find('#created').val(values.created.format('YYYY-MM-DD HH:mm:ss'));
                    $modal.data('row', row);
                    $editorTitle.text('Quick edit row #' + values.id);
                    $modal.modal('show');
                },
                deleteRow: function(row){
                    if (confirm('Are you sure you want to delete the row?')){
                        $.post( "controllers/ParseDeleteProductsRowByID.php", { 
                            id: row.value.id, 
                        })
                        .done(function( data ) {
                            row.delete();
                        });
                    }
                }
            }
        }),
        uid = <?php require_once('controllers/ParseProductsLatestId.php'); ?>;

    $editor.on('submit', function(e){
        if (this.checkValidity && !this.checkValidity()) return;
        e.preventDefault();
        var row = $modal.data('row'),
            values = {
                id: $editor.find('#id').val(),
                active: $editor.find('#active option:selected').val(),
                title: $editor.find('#title').val(),
                price: $editor.find('#price').val(),
                price_discount: $editor.find('#price_discount').val(),
                description_short: $editor.find('#description_short').val(),
                description_long: $editor.find('#description_long').val(),
                logo_url: $editor.find('#logo_url').val(),
                created: moment($editor.find('#created').val(), 'YYYY-MM-DD HH:mm:ss'),
            };

        if (row instanceof FooTable.Row){
            $.post( "controllers/ParseUpdateProductsRowByID.php", { 
                id: values.id, 
                active: values.active, 
                title: values.title, 
                price: values.price, 
                price_discount: values.price_discount, 
                description_short: values.description_short, 
                description_long: values.description_long,
                logo_url: values.logo_url,
            })
            .done(function( data ) {
                row.val(values);
            });
        } else {
            $.post( "controllers/ParseInsertProductsRow.php", {
                active: values.active, 
                title: values.title, 
                price: values.price, 
                price_discount: values.price_discount, 
                description_short: values.description_short, 
                description_long: values.description_long,
                logo_url: values.logo_url,
            })
            .done(function( data ) {
                values.id = uid+=1;
                ft.rows.add(values);
            });
        }
        $modal.modal('hide');
    });
});
</script>
    </body>
</html>