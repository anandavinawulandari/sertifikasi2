<?php

namespace App\DataTables;

use App\Models\Arsip;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class ArsipDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     * @return \Yajra\DataTables\EloquentDataTable
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addColumn('action', 'arsip.action');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Arsip $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Arsip $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {        return $this->builder()
        ->setTableId('arsip-table')
        ->columns($this->getColumns())
        ->minifiedAjax()
        ->orderBy(1)
        ;
    }

    /**
     * Get the dataTable columns definition.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            'id',
            'kategori',
            'judul',
            'dokumen'
        ];
    }
    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'Arsip_' . date('YmdHis');
    }
}
