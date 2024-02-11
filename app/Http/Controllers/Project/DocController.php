<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class DocController extends Controller
{
    public function showUploadForm(Project $project)
    {

        return view('projects.documents.index', compact('project'));
    }

    public function uploadFile(Request $request, Project $project)
    {
        $request->validate([
            'file' => 'required|mimes:pdf,doc,docx,xls,xlsx|max:10240', // Максимальный размер файла: 10MB
        ]);

        $file = $request->file('file');
        $filename = $file->getClientOriginalName();

        // Сохранение файла в хранилище (storage/app/public)
        $file->storeAs('public/documents/'.$project->id, $filename);

        return redirect()->route('projects.documents.index', $project->id)->with('success', 'Файл успешно загружен.');
    }

    public function downloadFile($project, $filename)
    {
        $path = storage_path('app/public/documents/'.$project.'/'.$filename);

        if (file_exists($path)) {
            return response()->download($path, $filename);
        }

        abort(404, 'Файл не найден');
    }

    public function deleteFile($filename, Project $project)
    {
        $path = storage_path('app/public/' . $filename);

        if (file_exists($path)) {
            unlink($path); // Удаление файла

            return redirect()->route('projects.documents.index', $project->id)->with('success', 'Файл успешно удален.');
        }

//        return redirect('/upload-file')->with('error', 'Файл не найден.');
    }
}
