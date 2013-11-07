@extends('freak::elements.detail')

@section('tables')
<table class="table table-striped table-detail-view">
    <tbody>
    <tr>
        <th>URL</th>
        <td>
            <a href="{{ $link->url }}">
            {{ $link->url }}
            </a>
        </td>
    </tr>
    <tr>
        <th>Page</th>
        <td>
            {{ $link->page }}
        </td>
    </tr>
    <tr>
        <th>Arguments</th>
        <td>
            {{ http_build_query($link->arguments) }}
        </td>
    </tr>
    </tbody>
</table>
@stop
