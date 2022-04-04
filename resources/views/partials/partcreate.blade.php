<section class="container">
    <h1 class="mt-5 ms-5">Create User</h1>
    <form action="/users" method="POST" class="mt-5">
        @csrf
        <div class="row">
            <div class="col">
                <label for="">Name</label>
                <input type="text" class="form-control" placeholder="Name" name="name">
            </div>
            <div class="col">
                <label for="">Age</label>
                <input type="number" class="form-control" placeholder="Age" name="age">
            </div>
            <div class="col">
                <label for="">Phone</label>
                <input type="text" class="form-control" placeholder="Phone" name="phone">
            </div>
        </div>
        <div class="form-floating mb-3 mt-4">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
            <label for="floatingInput">Email</label>
        </div>
        <div class="form-floating">
            <input type="text" class="form-control" id="floatingPassword" placeholder="Password" name="nickname">
            <label for="floatingPassword">Nickname</label>
        </div>
        <button type="submit" class="btn btn-outline-primary mt-4">Add User</button>
    </form>
</section>
