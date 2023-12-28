<?php

namespace App\Http\Controllers\Api\BackOffice;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\BackOffice\OrderIndexRequest;
use App\Http\Resources\Api\BackOffice\OrdersResource;
use App\Repositories\Api\BackOffice\Contract\OrderRepositoryInterface;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class OrderController extends Controller
{
    public function __construct(private readonly OrderRepositoryInterface $repository)
    {
    }

    public function index(OrderIndexRequest $request): AnonymousResourceCollection
    {
        return OrdersResource::collection($this->repository->orderIndex($request->validated()));
    }
}
