(function ($) {

    var dataSource = new kendo.data.DataSource({
        transport: {
            read: {
                url: "https://www.sherpaonline.net/customers.cfm?method=list"
            }
        },
        sort: { field: "lastName", dir: "asc" },
        pageSize: 25,
        schema : {
            data: "customers",
            total: "total"
        }
    });

    $("#pager").kendoPager({
        autoBind: false,
        dataSource: dataSource
    });

    $("#listView").kendoListView({
        dataSource: dataSource,
        template: kendo.template($("#template").html())
    });

})(jQuery);