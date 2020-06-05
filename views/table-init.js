
(function ($) {
    $('#bootstrap-data-table-export').DataTable({

        language: {
            "processing":   "处理中...",
            "loadingRecords": "载入中...",
            "lengthMenu":   "显示 _MENU_ 项结果",
            "zeroRecords":  "没有符合的结果",
            "info":         "显示第 _START_ 至 _END_ 项结果，共 _TOTAL_ 项",
            "infoEmpty":    "显示第 0 至 0 项结果，共 0 项",
            "infoFiltered": "(从 _MAX_ 项结果中过滤)",
            "infoPostFix":  "",
            "search":       "搜寻:",

            "paginate": {
                "first":    "第一页",
                "previous": "上一页",
                "next":     "下一页",
                "last":     "最后一页"
            },

        },
        "order": [[ 0, "desc" ]]
    });

    $('#row-select').DataTable( {
        initComplete: function () {
            this.api().columns().every( function () {
                var column = this;
                var select = $('<select class="form-control"><option value=""></option></select>')
                    .appendTo( $(column.footer()).empty() )
                    .on( 'change', function () {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );

                        column
                            .search( val ? '^'+val+'$' : '', true, false )
                            .draw();
                    } );

                column.data().unique().sort().each( function ( d, j ) {
                    select.append( '<option value="'+d+'">'+d+'</option>' )
                } );
            } );
        }
    } );

})(jQuery);
