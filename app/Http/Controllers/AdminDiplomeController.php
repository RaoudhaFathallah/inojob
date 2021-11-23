<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatediplomeRequest;
use App\Http\Requests\UpdatediplomeRequest;
use App\Repositories\diplomeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class AdminDiplomeController extends AppBaseController
{
    /** @var  diplomeRepository */
    private $diplomeRepository;

    public function __construct(diplomeRepository $diplomeRepo)
    {
        $this->diplomeRepository = $diplomeRepo;
    }

    /**
     * Display a listing of the diplome.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $diplomes = $this->diplomeRepository->all();

        return view('diplomes.index')
            ->with('diplomes', $diplomes);
    }

    /**
     * Show the form for creating a new diplome.
     *
     * @return Response
     */
    public function create()
    {
        return view('diplomes.create');
    }

    /**
     * Store a newly created diplome in storage.
     *
     * @param CreatediplomeRequest $request
     *
     * @return Response
     */
    public function store(CreatediplomeRequest $request)
    {
        $input = $request->all();

        $diplome = $this->diplomeRepository->create($input);

        Flash::success('Diplome saved successfully.');

        return redirect(route('diplomes.index'));
    }

    /**
     * Display the specified diplome.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $diplome = $this->diplomeRepository->find($id);

        if (empty($diplome)) {
            Flash::error('Diplome not found');

            return redirect(route('diplomes.index'));
        }

        return view('diplomes.show')->with('diplome', $diplome);
    }

    /**
     * Show the form for editing the specified diplome.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $diplome = $this->diplomeRepository->find($id);

        if (empty($diplome)) {
            Flash::error('Diplome not found');

            return redirect(route('diplomes.index'));
        }

        return view('diplomes.edit')->with('diplome', $diplome);
    }

    /**
     * Update the specified diplome in storage.
     *
     * @param int $id
     * @param UpdatediplomeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatediplomeRequest $request)
    {
        $diplome = $this->diplomeRepository->find($id);

        if (empty($diplome)) {
            Flash::error('Diplome not found');

            return redirect(route('diplomes.index'));
        }

        $diplome = $this->diplomeRepository->update($request->all(), $id);

        Flash::success('Diplome updated successfully.');

        return redirect(route('diplomes.index'));
    }

    /**
     * Remove the specified diplome from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $diplome = $this->diplomeRepository->find($id);

        if (empty($diplome)) {
            Flash::error('Diplome not found');

            return redirect(route('diplomes.index'));
        }

        $this->diplomeRepository->delete($id);

        Flash::success('Diplome deleted successfully.');

        return redirect(route('diplomes.index'));
    }
}
