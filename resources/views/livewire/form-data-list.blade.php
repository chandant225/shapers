<div>
    <div>
        <button wire:click="exportIntoExcel" class="btn btn-primary float-right">Export into Excel</button>
    </div>
    <div>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Full Name</th>
                <th scope="col">Email</th>
                <th scope="col">Gender</th>
                <th scope="col">D-O-B</th>
                <th scope="col">Phone</th>
                <th scope="col">Social Media</th>
                <th scope="col">CV</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dataList as $data)
                <tr>
                    <th scope="row">{{ $data->id }}</th>
                    <td>{{ $data->fullname }}</td>
                    <td>{{ $data->email }}</td>
                    <td>{{ $data->gender }}</td>
                    <td>{{ $data->date_of_birth }}</td>
                    <td>{{ $data->phone }}</td>
                    <td>{{ $data->social_media }}</td>
                    <td><a href="/storage/pdf_storage/{{ $data->cv_file }}">download cv</a></td>
                    <td>
                        <div>
                            <button class="btn btn-success"><a style="text-decoration: none;color:white"
                                    href="/admin/joinuses/{{ $data->id }}">View
                                    More</a></button>
                            <button wire:click="deleteItem('{{ $data->id }}')"
                                class="btn btn-danger">Delete</button>
                        </div>
                    </td>


                </tr>
            @endforeach

        </tbody>
    </table>
    <div>
        <center>
            {{ $dataList->links() }}
        </center>
    </div>
</div>
