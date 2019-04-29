<?php

namespace App\Http\Controllers;

class DocumentationController extends Controller
{
    public function getRootPage($page)
    {
        return redirect('docs/' . DEFAULT_VERSION . '/' . $page);
    }

    public function show($version, $page = null)
    {
        if (!in_array($version, ['1.0', '1.1'])) {
            $page = $version;
            $version = DEFAULT_VERSION;
        }

        $page = $page ?? 'installation';

        return redirect('docs/' . $version . '/' . $page);
    }
}
