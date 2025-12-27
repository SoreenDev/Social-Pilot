<x-dashboard.layout>
    <x-dashboard.modal title="store new plan">
        <div class="card">
            <div class="card-body">
                <form class="forms-sample" method="POST" action="{{ route('my-plan.store') }}">
                    @csrf
                    <div class="form-group">
                        <label>select plan</label>
                        <select class="js-example-basic-single" style="width:100%" name="plan_id">
                            @foreach($plans as $plan)
                                <option value="{{$plan->id}}">{{$plan->name}}</option>
                            @endforeach
                        </select>
                        @error('plan_id')
                        <div class="label -mt-4 mb-2">
                            <span class="label-text-alt text-error text-danger">{{ $message }}</span>
                        </div>
                        @enderror
                    </div>

                    <x-dashboard.text_input name="date" label="date" />
                    <x-dashboard.text_input name="weeks_count" label="weeks count" />

                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                </form>
            </div>
        </div>
    </x-dashboard.modal>
    <x-dashboard.table name="plan" title="my plan history" :headers="$headerTable">
        @foreach($userPlans as $userPlan)
            <tr>
                <td>{{ $userPlan->plan->name }}</td>
                <td>{{ $userPlan->date }}</td>
                <td>{{ $userPlan->weeks_count }}</td>
                <td><label class="badge badge-danger">{{ $userPlan->status }}</label></td>
                <td>{{ $userPlan->start_at . '  |  '.  $userPlan->end_at }}</td>
                <td>{{ $userPlan->price }}</td>
            </tr>
        @endforeach
    </x-dashboard.table>
</x-dashboard.layout>
