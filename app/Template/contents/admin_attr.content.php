<h1 style="position: relative; left: 40%; color: #4cae4c">Add to catalog</h1>
<div class="c-admin">
    <div class="row">
        <div class="header-top h-nav">
            <div class="header-top min">
                <h2>Orders</h2>
            </div>
        </div>
        <div class="col-md-12">

            <div class="col-lg-6 nav-admin">
                <a href="/admin"><button type="button" class="btn btn-info btn-c">Back to admin-panel</button></a>
                <a href="/admin/orders"><button type="button" class="btn btn-info btn-c">Ready orders</button></a>
                <a href="/admin/create"><button type="button" class="btn btn-info btn-c">Add new user</button></a>
            </div>
            
            <form class="attr-form" action="/admin/attr" method="post">
                <p>Product-name: <input name="prod_name" type="text" class="form-control">
                <p>Attribute-name: <input name="attr_name" type="text" class="form-control">
                <p>Attribute-value: <input name="attr_value" type="text" class="form-control">
                    <input type="submit" class="btn btn-info save-btn" value="save">
            </form>
        </div>
    </div>
</div>