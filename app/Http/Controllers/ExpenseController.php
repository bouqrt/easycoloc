<?php

use App\Models\Expense;
use App\Models\Category;
use App\Models\Colocation;
use App\Models\User;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    public function index()
    {
        $expenses = Expense::with('user','category','colocation')->get();

        return view('expenses.index', compact('expenses'));
    }

    public function create()
    {
        $categories = Category::all();
        $colocations = Colocation::all();
        $users = User::all();

        return view('expenses.create', compact('categories','colocations','users'));
    }

    public function store(Request $request)
    {
        Expense::create($request->all());

        return redirect()->route('expenses.index');
    }
}