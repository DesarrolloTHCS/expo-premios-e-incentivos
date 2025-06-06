<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PageController extends Controller
{
    public function home(){
        return view('home');
    }
    /***************************EXPERIENCIA TU HOGAR CON SENTIDO******************************/
    public function index(){
        return view("experiencia.index");
    }
    public function finalSite(Request $request){
        //dd($request);

        //Recibir los datos del request
        $name = $request->input('name');
        $color = $request->input('color');
        $logo = $request->input('logo');
        $banner = $request->input('banner');
        $points = $request->input('points');
        $categories = $request->input('categories');
        $sections = $request->input('sections');

        //Separar las categorías en variables independientes
        $categoriesArray = explode(',', $categories);

        $category1 = isset($categoriesArray[0]) ? $categoriesArray[0] : null;
        $category2 = isset($categoriesArray[1]) ? $categoriesArray[1] : null;
        $category3 = isset($categoriesArray[2]) ? $categoriesArray[2] : null;

        $sectionsArray = explode(',', $sections);

        //Lógica para la carga del logotipo personalizado
        if ($request->hasFile('customLogoInput')) {
            $file = $request->file('customLogoInput');
            $fileName = $file->getClientOriginalName();
            $file->storeAs('public/img/logos', $fileName);
            $logo = $fileName;
        } else {
            $logo = $request->input('logo');
        }

        //Generar Slugs únicos
        $slug = Str::slug($name);
        $count = Page::where('slug','like', $slug . '%')->count();
        if($count > 0){
            $slug = $slug . '-' . ($count + 1);
        }

        //Guardar los datos en la base de datos
        $page = Page::create([
            'name'=> $name,
            'color'=> $color,
            'logo'=> $logo,
            'banner'=> $banner,
            'points'=> $points,
            'category1' => $category1,
            'category2'=> $category2,
            'category3'=> $category3,
            'sections'=> json_encode($sectionsArray),
            'slug' => $slug,
        ]);

        //Verificar el tipo de dispositivo
        $deviceType = $request->input('deviceType');
        if ($deviceType === 'mobile') {
            //Redirigir a la pantalla  de carga para dispositivos móviles
            return view('experiencia.loading-screen-mobile');
        }

        //Redirigir a la página generada
        return redirect()->route('finalSite.show', $slug);

        //Enviar los datos a la página
        /* return view("final-site", [
            "name"=> $name,
            "color"=> $color,
            "logo"=> $logo,
            "banner"=> $banner,
            "points"=> $points,
            //"categories"=> $categories,
            "category1" => $category1,
            "category2" => $category2,
            "category3" => $category3,
            "sections"=> $sectionsArray
        ]); */
    }
    public function show($slug){
        $page = Page::where('slug', $slug)->firstOrFail();

        return view('experiencia.final-site', [
            "name" => $page->name,
            "color"=> $page->color,
            "logo"=> $page->logo,
            "banner"=> $page->banner,
            "points"=> $page->points,
            "category1"=> $page->category1,
            "category2"=> $page->category2,
            "category3"=> $page->category3,
            "sections"=> json_decode($page->sections, true),
        ]);
    }
    public function pages(){
        $pages = Page::all();

        return view("experiencia.pages", compact("pages"));
    }
}
