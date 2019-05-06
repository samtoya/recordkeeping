<?php
    
    namespace App\Imports;
    
    use App\Car;
    use App\Customer;
    use Illuminate\Database\Eloquent\Model;
    use Maatwebsite\Excel\Concerns\ToModel;
    use Maatwebsite\Excel\Concerns\WithHeadingRow;


    class CarsImport implements ToModel, WithHeadingRow
    {
        /**
         * @param array $row
         *
         * @return Model|null
         */
        public function model(array $row)
        {
            $customer = Customer::create([
                'name' => $row['customer_name'],
                'phone' => $row['contact_no'],
            ]);
            
            return new Car([
                'customer_id' => $customer->getAttribute('id'),
                'plant_line_off_date' => $row['plant_line_off_date'],
                'vin' => $row['vin'],
                'registration_number' => $row['reg'],
                'status' => $row['status'],
                'mileage' => $row['mileage'],
                'date' => $row['date'],
                'branch' => $row['branch'],
                'comment' => $row['comment'],
                'warranty_claim_status' => $row['warranty_claim_status'],
                'replacement_parts' => $row['replacement_parts']
            ]);
        }
        
        
    }
