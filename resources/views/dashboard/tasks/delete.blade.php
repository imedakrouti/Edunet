<!-- Deleted inFormation task -->
<div class="modal fade text-left" id="Delete_task{{$task->id}}" tabindex="-1" aria-labelledby="myModalLabel120" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-dialog-centered modal-dialog" role="document">
          <div class="modal-content">
             <div class="modal-header bg-danger">
                      <h5 class="modal-title text-light" id="myModalLabel120">
                          <i class="far fa-trash-alt text-light mr-2"></i>
                         @lang('site.delete') @lang('site.task')
                      </h5>
                      <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                          <i data-feather="x"></i>
                      </button>
                  </div>
              <div class="modal-body">
                  <form action="{{ route('dashboard.task.destroy', $task->id) }}" method="post">
                      @csrf
                      @method('DELETE')
  
                      <input type="hidden" name="id" value="{{$task->id}}">
                      <div class="alert alert-custom alert-outline-2x alert-outline-danger fade show mb-5 w-100" role="alert">
                          <div class="alert-icon"><i class="flaticon-warning"></i></div>
                          <div class="alert-text"> هل أنت متأكد أنك تريد حذف ذلك؟
                          </div>
  
                      </div>
  
                  </div>
                      <div class="modal-footer d-flex justify-content-start">
  
                          <button  class="btn btn-light-danger font-weight-bold mr-2">
                              <i class="fa fa-trush"></i>حذف </button>
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">إلغاء</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>
 
  {{--! Edit task modal --}}
  {{-- Delete task modal --}}
  {{-- <div class="modal-danger me-1 mb-1 d-inline-block">
      <!--Danger theme Modal -->
      <div class="modal fade text-left" id="Delete_task{{$task->id}}" tabindex="-1" aria-labelledby="myModalLabel120" aria-hidden="true" style="display: none;">
          <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
              <form action="{{ route('dashboard.task.destroy', $task->id) }}" method="post">
                  @csrf
                  @method('DELETE')
                  <div class="modal-header bg-danger">
                      <h5 class="modal-title white" id="myModalLabel120">
                          Supprimer un Elève
                      </h5>
                      <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                          <i data-feather="x"></i>
                      </button>
                  </div>
                  <div class="modal-body">
                      Voulez-vous vraiment le supprimer?
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                          <i class="bx bx-x d-block d-sm-none"></i>
                          <span class="d-none d-sm-block">Annuler</span>
                      </button>
                      <button id="delete-btn" type="button" class="btn btn-danger ml-1" data-bs-dismiss="modal">
                          <i class="bx bx-check d-block d-sm-none"></i>
                          <span class="d-none d-sm-block">supprimer</span>
                      </button>
                  </div>
              </form>
          </div>
      </div>
  </div> --}}
  