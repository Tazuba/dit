<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use App\Models\Clients;
use Illuminate\Http\Request;
use App\Models\PaymentTypes;
use App\Http\Requests\SaleStoreRequest;
use App\Http\Requests\SaleUpdateRequest;

class SaleController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('view-any', Sale::class);

        $search = $request->get('search', '');

        $sales = Sale::search($search)
            ->latest()
            ->paginate(5);

        return view('app.sales.index', compact('sales', 'search'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->authorize('create', Sale::class);

        $allClients = Clients::pluck('name', 'id');
        $allPaymentTypes = PaymentTypes::pluck('payment_name', 'id');

        return view(
            'app.sales.create',
            compact('allClients', 'allPaymentTypes')
        );
    }

    /**
     * @param \App\Http\Requests\SaleStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaleStoreRequest $request)
    {
        $this->authorize('create', Sale::class);

        $validated = $request->validated();

        $sale = Sale::create($validated);

        return redirect()
            ->route('sales.edit', $sale)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Sale $sale
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Sale $sale)
    {
        $this->authorize('view', $sale);

        return view('app.sales.show', compact('sale'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Sale $sale
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Sale $sale)
    {
        $this->authorize('update', $sale);

        $allClients = Clients::pluck('name', 'id');
        $allPaymentTypes = PaymentTypes::pluck('payment_name', 'id');

        return view(
            'app.sales.edit',
            compact('sale', 'allClients', 'allPaymentTypes')
        );
    }

    /**
     * @param \App\Http\Requests\SaleUpdateRequest $request
     * @param \App\Models\Sale $sale
     * @return \Illuminate\Http\Response
     */
    public function update(SaleUpdateRequest $request, Sale $sale)
    {
        $this->authorize('update', $sale);

        $validated = $request->validated();

        $sale->update($validated);

        return redirect()
            ->route('sales.edit', $sale)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Sale $sale
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Sale $sale)
    {
        $this->authorize('delete', $sale);

        $sale->delete();

        return redirect()
            ->route('sales.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
