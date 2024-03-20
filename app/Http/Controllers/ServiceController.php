<?php

namespace App\Http\Controllers;

use App\Http\Requests\Service\StoreServiceRequest;
use App\Http\Requests\Service\UpdateServiceRequest;
use App\Models\Service;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    public $message = null;
    public $data = null;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->data = [
            'services' => Service::all(),
        ];

        return view('dash.service.list-services', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dash.service.add-service');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServiceRequest $request)
    {
        $request->validated();
        try {
            $slug = Str::slug($request->name);

            $exists = Service::where('slug', $slug)->exists();
            while ($exists) {
                $slug = $slug . '-' . rand(100, 99999);
            }

            $upload = uploadImage($request, $slug, 'public/storage/images/services');

            if (!$upload['status']) throw new Exception('Uploading image failed, try again later', 0);

            $record = Service::create([
                'identifier' => generate_identifier(),
                'name' => $request->name,
                'slug' => $slug,
                'description' => $request->description,
                'description' => $request->description,
                'overview' => $request->overview,
                'keywords' => $request->keywords,
                'photo' => $upload['new_name'],
                'featured' => $request->featured,
                'published_at' => Carbon::now(),
            ]);

            if (!$record) throw new Exception('Creating new Service failed, try again later');

            return Redirect::back()->with('success', 'Service created successfully.');
        } catch (\Throwable $th) {
            $this->message = config('app.env') == 'production' ? 'Creating new Service failed, try again later' : $th->getMessage();
            return Redirect::back()->with('error', $this->message());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service, $id)
    {
        $service = Service::find($id);

        if (!$service) throw new Exception('Service not found', 0);

        $this->data = [
            'service' => $service,
        ];

        return view('dash.service.show-service', $this->data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceRequest $request, Service $service, $id)
    {
        $request->validated();

        try {
            $service = Service::find($id);

            if (!$service) throw new Exception('Service not found', 0);

            $update = $service->update($request->all());

            if (!$update) throw new Exception('Updating service failed, try again later.', 0);

            return Redirect::back()->with('success', 'Service updated successfully.');
        } catch (\Throwable $th) {
            $this->message = config('app.env') == 'production' ? 'Updating service failed, try again later.' : $th->getMessage();
            return Redirect::back()->with('error', $this->message);
        }
    }

    public function publish($id)
    {
        try {
            $service = Service::find($id);

            if (!$service) throw new Exception('Service not found', 0);

            $state = $service->published_at != null ? 'Unpublishing' : 'Publishing';
            $update = $service->update([
                'published_at' =>  $service->published_at != null ? null : Carbon::now(),
                'featured' =>  $service->published_at != null ? false : true,
                'active' =>  $service->published_at != null ? false : true,
            ]);

            if (!$update) throw new Exception($state . ' service failed, try again later.', 0);

            return Redirect::back()->with('success', 'Service updated successfully.');
        } catch (\Throwable $th) {
            config('app.env') == 'production' ? $this->message = 'Updating service failed, try again later.' : $th->getMessage();
            return Redirect::back()->with('error', $this->message);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        //
    }
}
