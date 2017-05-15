
   <h4 style="padding-left:5px;">Actividad</h4>
    <ul class="timeline">
        <li>
            <i class="fa fa-plus"></i>
            <div class="timeline-item" style="width:0;">
{{--
                <button id="btmAddTask" type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">
                    <i class="fa fa-plus" aria-hidden="true"></i>Agregar
                </button> , $tracking->id
--}}
                <a id="btmAddTask" href="{{ route('Tasks.create', (( $tracking == null )? 0: $tracking->id ))}}" type="button" class="btn btn-success">
                    <i class="fa fa-home" aria-hidden="true"></i> Agregar</a>
            </div>
        </li>

        @if( $mytasks != null)
            @foreach($mytasks as $task  )

                <li class="time-label">
                  <span class="bg-gray">{{ $task->date }}</span>
                </li>
                <li id="task-889751">
                    <i class="{{ $task->taskType->icon }}"></i>
                    <div class="timeline-item">
                        <span class="pull-right" style="padding:5px;">
                            <a href="#" class="btn btn-xs btn-success">
                                <i class="fa fa-check"></i>
                            </a>
                            <div class="btn-group" role="group">
                              <button class="btn btn-xs btn-default dropdown-toggle" type="button"
                                      id="task-889751-options" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                  <i class="fa fa-cog"></i>
                              </button>
                              <ul class="dropdown-menu pull-right" aria-labelledby="task-889751-options">
                                  <li>
                                      <a href="#">
                                          <i class="fa fa-edit"></i>
                                          Editar
                                      </a>
                                  </li>
                                  <li>
                                      <a href="#">
                                          <i class="fa fa-file-text-o"></i>
                                          {{ $task->notes }}
                                      </a>
                                  </li>
                              </ul>
                            </div>
                        </span>

                        <h3 class="timeline-header">
                            <strong>{{ date('G:i', strtotime($task->hour_to)) }} - {{ date('G:i', strtotime($task->hour_from)) }} {{ $task->taskType->name }}</strong>
                        </h3>

                        <div class="timeline-body">
                            {{--<a href="/pro/agencies/house/357244/tracking/">Piso en Calle de Goya, Madrid, Madrid de 130 m2</a>--}}
                            <p>{{ $task->notes }}</p>
                        </div>
{{--
                        <div class="timeline-footer">
                            <img src="https://witei.com/static/img/profile_pics/avatar4.png" style="position:absolute;bottom:5px;right:5px;border-radius:3px;width:25px;height:25px" data-toggle="tooltip" data-placement="left" title="Margarita Nazate">
                        </div>
--}}
                    </div>
                </li>
            @endforeach
        @endif
        <li>
            <i class="fa fa-clock-o bg-gray"></i>
        </li>

    </ul>
