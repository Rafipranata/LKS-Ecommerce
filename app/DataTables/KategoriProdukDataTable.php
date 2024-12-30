<?php

namespace App\DataTables;

use App\Models\KategoriProduk;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Illuminate\View\View;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class KategoriProdukDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addIndexColumn('DT_RowIndex')
            ->editColumn('status', function($query){
                return $query->labelStatus($query->status);
            })
            ->addColumn('action', function($query){
                return view('admin.category.buttonactions', compact('query'));
            })
            ->rawColumns(['status']);
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(KategoriProduk $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('kategoriproduk-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    //->dom('Bfrtip')
                    ->orderBy(1)
                    ->selectStyleSingle();
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::computed('DT_RowIndex')
                ->title('No.')
                ->width(10)
                ->addClass('text-center'),
            Column::make('nama_kategori'),
            Column::make('status')
            ->width(10)
            ->addClass('text-center'),
            Column::computed('action')
                ->title('Action')
                ->width(150)
                ->addClass('text-center'),

        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'KategoriProduk_' . date('YmdHis');
    }
}
