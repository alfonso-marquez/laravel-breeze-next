import { TableSelection } from '../components'
import { mockData } from '../pages/dashboard'

const Employees = () => {
    return (
        <TableSelection data={mockData}/>
    )
}

export default Employees