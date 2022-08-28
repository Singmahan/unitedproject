<div class="card">
    <div class="card-header">
        <h5 class="text-center">Import Excel ข้อมูลลูกหนี้</h5>
    </div>
    <div class="card-body">
        <form action="add_excel1_db.php" method="POST" enctype="multipart/form-data">
            <div class="input-group">
                <input type="file" name="import_file1" class="form-control" required>
                <button type="submit" name="import_file_btn1" class="btn btn-success">Import Excel</button>
            </div>
        </form>
    </div>
</div>