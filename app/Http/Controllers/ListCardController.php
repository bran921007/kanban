<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListCardController extends Controller
{
     /**
     * @var $listCart
     */
    private $listCard;

    /**
     * ProjectController constructor.
     *
     * @param \App\ListCard $listCard
     */
    public function __construct(ListCard $listCard)
    {
        $this->listCart = $listCard;
    }

    /**
     * Show the create form.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getListCards(): JsonResponse
    {
        /** @var \App\Models\User $user */
        $user = Auth::user();
        $listCards = ListCard::get();

        return response()->json([
            'listCards' => $listCards
        ]);

    }

    /**
     * Show the create form.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create(): Renderable
    {
        /** @var \App\Models\User $user */
        $user = Auth::user();
        

    }

    /**
     * Create a new list Card .
     *
     * @param Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        $listCard = $this->listCard->create($request->onlyValidated());
        $request->session()->flash('success', 'List Card created successfully.');

        return response()->json([
           
        ]);
    }

    /**
     * Update list Card .
     *
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request)
    {
        $listCard = $this->listCard->update($request->onlyValidated());
        $request->session()->flash('success', 'List Card updated successfully.');

        return response()->json([
           
        ]);
    }

    /**
     * Delete a new list Card .
     *
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(Request $request)
    {
        $listCard = $this->listCard->delete($request->onlyValidated());
        $request->session()->flash('success', 'List Card delete successfully.');

        return response()->json([
           
        ]);
    }
}
