@extends('layouts.main')
@section('content')
    <div class="content-wrapper kanban">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="row">
                            <h1>Задачи</h1>
                            <a href="{{ route('tasks.create', ) }}" class="btn btn-success ml-2">Добавить</a>
                                <div class="ml-5">
                            <form action="{{ route('tasks.filter.index') }}" method="GET">
                                <select name="performer">
                                    <option value="">Все сотрудники</option>
                                    @foreach($users as $user)
                                        <option
                                            value="{{ $user->id }}" {{ request('performer') == $user->id ? 'selected' : '' }}>
                                            {{ $user->surname.' '.mb_substr($user->name, 0, 1).'.'.mb_substr($user->patronymic, 0, 1).'.' }}
                                        </option>
                                    @endforeach
                                </select>
                                <button type="submit" class="btn btn-info">Применить фильтр</button>
                            </form>
                                </div>

                            {{--                            <a href="{{ route('tasks.archieve') }}" class="btn btn-primary ml-2">Архив</a>--}}
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section class="content pb-3">
            <div class="container-fluid h-100">
                <div class="container">
                    <div class="card card-row card-danger">
                        <div class="card-header">
                            <h3 class="card-title">
                                Нужно сделать
                            </h3>
                        </div>
                        <div class="card-body">
                            @foreach($tasks as $task)
                                @if($task->status === 'Необходимо выполнить')
                                    <div class="card card-danger card-outline">
                                        <a href="{{route('tasks.show',$task->id)}}">
                                            <font color="black">
                                                <div class="card-body">

                                                    <h5 class="card-title"
                                                        style="font-size: 16px; line-height:1; ">{{$task->title}}</h5>

                                                    <div
                                                        class="float-right mb-2">{{\Carbon\Carbon::parse($task->deadline)->format('d.m.Y')}}</div>


                                                    <br>
                                                    <span
                                                        style="font-size:12px; line-height: 0.5;  color:gray">{{'Исполнитель: '.$users[$task->performer-1]->surname.' '.mb_substr($users[$task->performer-1]->name, 0, 1).'.'.mb_substr($users[$task->performer-1]->patronymic, 0, 1).'.'}}</span>
                                                    <br>
                                                    <span
                                                        style="font-size:12px; color:gray">
                                                         @if(is_numeric($task->project_id))
                                                            {{'Проект: '.$projects->where('id', $task->project_id)->firstOrFail()['title'] ?? null }}



                                                        @endif
                                                    </span>
                                                </div>
                                            </font>
                                        </a>

                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="card card-row card-warning">
                        <div class="card-header">
                            <h3 class="card-title">
                                В процессе
                            </h3>
                        </div>
                        <div class="card-body">
                            @foreach($tasks as $task)
                                @if($task->status === 'В процессе')
                                    <div class="card card-warning card-outline">
                                        <a href="{{route('tasks.show',$task->id)}}">
                                            <font color="black">
                                                <div class="card-body">

                                                    <h5 class="card-title"
                                                        style="font-size: 16px; line-height:1; ">{{$task->title}}</h5>

                                                    <div
                                                        class="float-right mb-2">{{\Carbon\Carbon::parse($task->deadline)->format('d.m.Y')}}</div>


                                                    <br>
                                                    <span
                                                        style="font-size:12px; line-height: 0.5;  color:gray">{{'Исполнитель: '.$users[$task->performer-1]->surname.' '.mb_substr($users[$task->performer-1]->name, 0, 1).'.'.mb_substr($users[$task->performer-1]->patronymic, 0, 1).'.'}}</span>
                                                    <br>
                                                    <span
                                                        style="font-size:12px; color:gray">
                                                        @if(is_numeric($task->project_id))
                                                            {{'Проект: '.$projects->where('id', $task->project_id)->firstOrFail()['title'] ?? null }}


                                                        @endif
                                                    </span>
                                                </div>
                                            </font>
                                        </a>

                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="card card-row card-success">
                        <div class="card-header">
                            <h3 class="card-title">
                                Сделано
                            </h3>
                        </div>
                        <div class="card-body">
                            @foreach($tasks as $task)
                                @if($task->status === 'Сделано')
                                    <div class="card card-success card-outline">
                                        <a href="{{route('tasks.show',$task->id)}}">
                                            <font color="black">
                                                <div class="card-body">
                                                    <h5 class="card-title"
                                                        style="font-size: 16px; line-height:1; ">{{$task->title}}</h5>
                                                    <div
                                                        class="float-right mb-2">{{\Carbon\Carbon::parse($task->deadline)->format('d.m.Y')}}</div>
                                                    <br>
                                                    <span
                                                        style="font-size:12px; line-height: 0.5;  color:gray">{{'Исполнитель: '.$users[$task->performer-1]->surname.' '.mb_substr($users[$task->performer-1]->name, 0, 1).'.'.mb_substr($users[$task->performer-1]->patronymic, 0, 1).'.'}}</span>
                                                    <br>
                                                    <span
                                                        style="font-size:12px; color:gray">
                                                         @if(is_numeric($task->project_id))
                                                            @php try {
                                                            'Проект: '.$projects->where('id', $task->project_id)->firstOrFail()['title'] ?? null;
                                                            } catch (ModelNotFoundException $e) {
                                                            $title = 'удалён';}
                                                            @endphp

                                                        @endif
                                                    </span>
                                                </div>
                                            </font>
                                        </a>

                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>




    <script>
        $(function () {
            $(".card").draggable({
                revert: true, // Возвращение карточки на место, если она не была перемещена
                containment: ".container" // Ограничение перемещения карточек контейнером
            });
        });
    </script>
@endsection
