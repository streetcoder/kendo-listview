<!DOCTYPE html>
<html>
<head>
    <title>Welcome to Kendo UI</title>
    <link rel="stylesheet" href="http://kendo.cdn.telerik.com/2017.3.1026/styles/kendo.common.min.css" />
    <link rel="stylesheet" href="http://kendo.cdn.telerik.com/2017.3.1026/styles/kendo.blueopal.min.css" />

    <script src="http://kendo.cdn.telerik.com/2017.3.1026/js/jquery.min.js"></script>

    <script src="http://kendo.cdn.telerik.com/2017.3.1026/js/kendo.all.min.js"></script>

    <style>
        #listView {
            padding: 10px 5px;
            margin-bottom: -1px;
            min-height: 210px;
        }
        .product {
            float: left;
            position: relative;
            width: 200px;
            height: 70px;
            margin: 0 5px 10px;
            padding: 10px;
            border: 2px solid #999999;
        }
        .product h3 {
            margin: 0;
            max-width: 200px;
            overflow: hidden;
            line-height: 1.1em;
            font-size: 11px;
            font-weight: normal;
            text-transform: uppercase;
            color: #999;
        }

        .k-listview:after {
            content: ".";
            display: block;
            height: 0;
            clear: both;
            visibility: hidden;
        }
    </style>

</head>
<body>

    <div class="demo-section k-content wide">
        <div id="listView"></div>
        <div id="pager" class="k-pager-wrap"></div>
    </div>

    <script type="text/x-kendo-template" id="template">
        <div class="product">
            <h3>ID: #:customerID#</h3>
            <h3>First  Name: #:firstName#</h3>
            <h3>Last  Name: #:lastName#</h3>
            <h3>Email: #:email#</h3>
            <h3>Company: #:companyName#</h3>
        </div>
    </script>

    <script src="customers.js"></script>

</body>
</html>