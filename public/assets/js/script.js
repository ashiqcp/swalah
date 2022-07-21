// openAddForm

function openAddForm() {
    document.getElementById("openAddForm").hidden = false;
}

function closeForm() {
    document.getElementById("openAddForm").hidden = true;
}

function editCall(student) {
    $.ajax({
        url: `edit/${student.id}`,
        success: function (result) {
            openAddForm();
            $("#name").val(result.name);
            $("#adno").val(result.adno);
            $("#class").val(result.class);
            $('#addForm').attr('action', `/update/${result.id}`);
            console.log(result);
        },
    });
}
