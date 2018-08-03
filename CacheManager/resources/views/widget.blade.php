<div id="cachemanager" class="card flush">
    <div class="head">
        <h1>Cache Manager</h1>

        <div class="btn-group">
            <button type="button" class="btn-more dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="icon icon-dots-three-vertical"></i>
            </button>
            <ul class="dropdown-menu">
                <li><a href="{{ route('settings.edit', 'cp') }}"><span class="icon icon-browser" aria-hidden="true"></span> Widget Settings</a></li>
                <li><a href="{{ $github_page }}" target="_blank"><span class="icon icon-github" aria-hidden="true"></span> Github Page</a></li>
            </ul>
        </div>

    </div>

    <div class="card-body">
        <table class="control">
            <tbody>
                <tr>
                    <td>
                        <a href="{{ route('cachemanager.clear-cache') }}"><em class="icon icon-trash"></em> Clear Cache</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="{{ route('cachemanager.clear-glide') }}"><em class="icon icon-trash"></em> Clear Glide (image) cache</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="{{ route('cachemanager.update-stache') }}"><em class="icon icon-cw"></em> Update Stache</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
